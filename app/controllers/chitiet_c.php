<?php 
	/**
	 * 
	 */
	class chitiet extends Controller
	{
		
		function index()
		{
			if(isset($_REQUEST['sanpham']))
			{
				$idsp=$_REQUEST['sanpham'];
			}
			else
			{
				$idsp = 0;
			}
			if($idsp!=0)
			{
				$soluongsp = $this->model->loaddulieu("SELECT k.soluong FROM sanpham s JOIN khohang k ON s.idkho=k.id WHERE s.id=$idsp");
				$thuoctinh = $this->model->loaddulieu("SELECT tenthuoctinh,mota FROM thuoctinh WHERE trangthai = 1");

				$select = '';
				$mota = [];
				// print_r($thuoctinh);die();
				foreach ($thuoctinh as $value) {
					// print_r($value['tenthuoctinh']);
					$select .= ",".$value['tenthuoctinh'];
					$mota[$value['tenthuoctinh']] = $value['mota'];

				}
				// print_r($mota); die();
				
				$sp = $this->model->loaddulieu("SELECT tensp,gia$select FROM sanpham WHERE id = $idsp");
				// print_r($sp); die();
				$thuoctinh = [];
				$def = ['tensp','gia'];
				foreach ($sp[0] as $key => $value) {
					if(!(in_array($key, $def))) {
					$thuoctinh[$key] = $value;
					}
				}
				// print_r($data);
				// die();
				$chungloai = 'dienthoai';
			}
			else
			{
				echo '<script type="text/javascript">window.location="trangchu"</script>';
			}

			// $data = ["chungloai" => $chungloai,"soluongsp" => $soluongsp[0]['soluong']];
			
			// print_r(array_merge($sp[0],$data)); die();

			$this->view->data=["idsp" => $idsp,"tensp" => $sp[0]['tensp'], "chungloai" => $chungloai,"soluongsp" => $soluongsp[0]['soluong'], "thuoctinh" => $thuoctinh, "mota" => $mota];
			
			$this->view->render('productDetail','chitiet_v');
		}
	}
?>