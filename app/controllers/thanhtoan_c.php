<?php
	class thanhtoan extends Controller {

		protected $tongtien = 0;
		protected $id_insert = 0;
		


		public function thanhtoan_online($id_insert){

			// print_r($_POST); die();

			$vnp_TmnCode = "PG2FA3YG"; //Mã website tại VNPAY 
			$vnp_HashSecret = "OTESJZGJXNLFPTRKKYMROARLQFOYUSQK"; //Chuỗi bí mật
			$vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
			$vnp_Returnurl = "http://fac.com/thanhtoan";

			// $vnp_TxnRef = $_POST['order_id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
			$vnp_TxnRef = $id_insert;
			$vnp_OrderInfo = $_POST['order_desc'];
			// $vnp_OrderType = $_POST['order_type'];
			$vnp_OrderType = 'billpayment';
			$vnp_Amount = $this->tongtien*100;
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
		}


		public function vnpay_return () {
			$idkh = $_SESSION['id'];
			$vnp_HashSecret = "OTESJZGJXNLFPTRKKYMROARLQFOYUSQK"; 
			$vnp_SecureHash = $_GET['vnp_SecureHash'];
			$inputData = array();
	        foreach ($_GET as $key => $value) {
	            if (substr($key, 0, 4) == "vnp_") {
	                $inputData[$key] = $value;
	            }
	        }
	        unset($inputData['vnp_SecureHashType']);
	        unset($inputData['vnp_SecureHash']);
	        ksort($inputData);
	        $i = 0;
	        $hashData = "";
	        foreach ($inputData as $key => $value) {
	            if ($i == 1) {
	                $hashData = $hashData . '&' . $key . "=" . $value;
	            } else {
	                $hashData = $hashData . $key . "=" . $value;
	                $i = 1;
	            }
	        }

	        //$secureHash = md5($vnp_HashSecret . $hashData);
			$secureHash = hash('sha256',$vnp_HashSecret . $hashData);

			 if ($secureHash == $vnp_SecureHash) {
                if ($_GET['vnp_ResponseCode'] == '00') {
                	// $id_inserted = $this->id_insert;
                	$this->model->themxoasua("DELETE FROM giohang WHERE idkh = $idkh");
                	// echo "UPDATE donhang SET trangthai =1 WHERE id = $id_inserted"; die();
                	// $this->model->themxoasua("UPDATE donhang SET trangthai =1 WHERE id = $id_insert");
                    // echo "GD Thanh cong";
                    echo '<script type="text/javascript">alert("Giao dich thanh cong moi ban tiep tuc mua sam")</script>';
					echo '<script type="text/javascript">window.location="trangchu"</script>';
					// return 1;

                } else {
                    // echo "GD Khong thanh cong";
                    return '<div class="alert alert-danger" role="alert"> Giao dịch không thành công</div>';
                    // $this->view->message = ''
                    // return 0;
                }
            } else {
                // echo "Chu ky khong hop le";
                return '<div class="alert alert-danger" role="alert"> Giao dịch không thành công </div>';
                // return 0;
            }
            // header("Location: http://fac.com/thanhtoan");

		}



		public function index() {


			$idkh = $_SESSION['id'];
			$data = $this->model->loaddulieu("SELECT * FROM giohang WHERE idkh = $idkh");
			

			// $this->view->data = $data;
			

			$giohang = $this->model->loaddulieu("SELECT tensp,soluong,gia FROM giohang WHERE idkh = $idkh");
			// print_r($data); die();
			$id_honhang = $this->model->loaddulieu("SELECT id FROM donhang WHERE idkh = $idkh");

			$tongtien = 0;
			$noidung = '';
			foreach ($giohang as $value) {
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
			$this->tongtien = $tongtien;


			
			if(isset($_REQUEST['thanhtoan'])) {
				// print_r($_REQUEST); die();
				// echo $this->tongtien;
				$hotendem = $_REQUEST['hotendem'];
				$ten = $_REQUEST['ten'];
				$diachi = $_REQUEST['diachi'];
				$sdt = $_REQUEST['sdt'];
				$gia = $this->tongtien;
				$ngaylap= time();
				$loaithanhtoan = $_REQUEST['loaithanhtoan'];
				$trangthai = 0;
				$trangthaigiaohang = 'Chưa giao';

				// echo "INSERT INTO donhang(idkh,hovatendem,ten,diachi,gia,sdt,ngaylap,loaithanhtoan,trangthai,trangthaigiaohang) VALUES($idkh,'$hotendem','$ten','$diachi',$gia,$sdt,$ngaylap,'$loaithanhtoan',$trangthai,$trangthaigiaohang)"; die();
				$id_insert = $this->model->themxoasua("INSERT INTO donhang(idkh,hovatendem,ten,diachi,gia,sdt,ngaylap,loaithanhtoan,trangthai,trangthaigiaohang) VALUES($idkh,'$hotendem','$ten','$diachi',$gia,$sdt,$ngaylap,'$loaithanhtoan',$trangthai,'$trangthaigiaohang')");
					if($id_insert > 0) {
						$this->id_insert = $id_insert;
						$giohang = $this->model->loaddulieu("SELECT * FROM giohang WHERE idkh=$idkh");
						// print_r($giohang); die();
						foreach ($giohang as $value) {
							$idsp = $value['idsp'];
							$tensp = $value['tensp'];
							$tennhasx = $value['tennhasx'];
							$soluong = $value['soluong'];
							$gia = $value['gia'];

							$this->model->themxoasua("INSERT INTO ct_donhang(iddonhang,idsp,tensp,soluong,gia,tennhasx,ngaylap) VALUES($id_insert,$idsp,'$tensp',$soluong,$gia,'$tennhasx',$ngaylap)");
							// echo "INSERT INTO ct_donhang(iddonhang,idsp,tensp,soluong,gia,tennhasx,ngaylap) VALUES($id_insert,$idsp,'$tensp',$soluong,$gia,'$tennhasx',$ngaylap)";

						}
						// die();
					}

				if($loaithanhtoan == 'online') {
					// echo '<script type="text/javascript">window.location="vnpay"</script>';
					// echo 'chualam';
					// print_r($this->id_insert);
					// print_r($id_insert); die();
					$this->thanhtoan_online($id_insert);
					
				}
				elseif($loaithanhtoan == 'offline'){
					// echo "DELETE FROM giohang WHERE idkh = $idkh"; die();
					$this->model->themxoasua("DELETE FROM giohang WHERE idkh = $idkh");
					
				}
				
			}


			if(isset($_GET['vnp_SecureHash'])) {
					// print_r($_GET['vnp_SecureHash']);
				// print_r($this->id_insert); die();
					$this->view->message = $this->vnpay_return();
					// print_r($this->view->message); die();
			}


			$data = $this->model->loaddulieu("SELECT * FROM giohang WHERE idkh = $idkh");
			

			$this->view->data = $data;

		$this->view->render('thanhtoan');
			
		

	}
		
}



?>