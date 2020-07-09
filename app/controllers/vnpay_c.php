<?php
	/**
	 * 
	 */
	class vnpay extends Controller
	{
		// protected $tongtien=0;
		public function index()

		{
			$idkh = $_SESSION['id'];



			// print_r($idkh); 
			$data = $this->model->loaddulieu("SELECT tensp,soluong,gia FROM giohang WHERE idkh = $idkh");
			// print_r($data); die();
			$id_honhang = $this->model->loaddulieu("SELECT id FROM donhang WHERE idkh = $idkh");

			$tongtien = 0;
			$noidung = '';
			foreach ($data as $value) {
				// print_r($value);
				$tongtien += $value['gia']*$value['soluong'];  
				$noidung .= $value['tensp'].', Số lượng: '.$value['soluong'].', Giá: '.$value['gia'].'. ';
			}
			$noidung =  'Thanh toán cho sản phẩm: '.$noidung;
			// echo $noidung;
			// echo $tongtien;
			// die();
			// print_r($id_honhang); die();
			$this->view->noidung = $noidung;
			$this->view->tongtien = $tongtien;
			// $this->tongtien = $tongtien;
			// require_once("./config.php");
			$this->view->render('vnpay');


			
		}

		public function thanhtoan() {
			// echo $this->tongtien; die();
			$vnp_TmnCode = "PG2FA3YG"; //Mã website tại VNPAY 
			$vnp_HashSecret = "OTESJZGJXNLFPTRKKYMROARLQFOYUSQK"; //Chuỗi bí mật
			$vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
			$vnp_Returnurl = "http://fac.com/vnpay/vnpay_return";

			$vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
			$vnp_OrderInfo = $_POST['order_desc'];
			$vnp_OrderType = $_POST['order_type'];
			$vnp_Amount = $_POST['amount'] * 100;
			// $vnp_Locale = $_POST['language'];
			$vnp_Locale = 'vn';
			$vnp_BankCode = $_POST['bank_code'];
			$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
			// print_r($_POST); 

			$inputData = array(
			    "vnp_Version" => "2.0.0",
			    "vnp_TmnCode" => $vnp_TmnCode,
			    "vnp_Amount" => $vnp_Amount,
			    "vnp_Command" => "pay",
			    "vnp_CreateDate" => date('YmdHis'),
			    "vnp_CurrCode" => "VND",
			    "vnp_IpAddr" => $vnp_IpAddr,
			    "vnp_Locale" => $vnp_Locale,
			    "vnp_OrderInfo" => $vnp_OrderInfo,
			    "vnp_OrderType" => $vnp_OrderType,
			    "vnp_ReturnUrl" => $vnp_Returnurl,
			    "vnp_TxnRef" => $vnp_TxnRef,
			);

			if (isset($vnp_BankCode) && $vnp_BankCode != "") {
			    $inputData['vnp_BankCode'] = $vnp_BankCode;
			}
			ksort($inputData);
			$query = "";
			$i = 0;
			$hashdata = "";
			foreach ($inputData as $key => $value) {
			    if ($i == 1) {
			        $hashdata .= '&' . $key . "=" . $value;
			    } else {
			        $hashdata .= $key . "=" . $value;
			        $i = 1;
			    }
			    $query .= urlencode($key) . "=" . urlencode($value) . '&';
			}

			$vnp_Url = $vnp_Url . "?" . $query;
			if (isset($vnp_HashSecret)) {
			   // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
			   	$vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
			    $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
			}
			// echo $vnp_Url; 
			// return redirect($vnp_Url);

			$returnData = array('code' => '00'
			    , 'message' => 'success'
			    , 'data' => $vnp_Url);

			// header($returnData['data']);
			header("Location: ".$returnData['data']."");
			// echo json_encode($returnData);

		}


		public function vnpay_return() {
			$this->view->render('vnpay_return');
		}
	}

?>