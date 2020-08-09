<?php
	class giohang extends Controller {
		public function index(){

			if(isset($_SESSION['id'])) {
				$idkh = $_SESSION['id'];
			}else {
				$idkh = 0;
			}


			// print($_GET['xoa']); die();
			if(isset($_GET['xoa'])) {
				$idgiohang = $_GET['xoa'];
				$tensp = $this->model->loaddulieu("SELECT tensp FROM giohang WHERE id = $idgiohang");
				$this->model->themxoasua("DELETE FROM giohang WHERE id = $idgiohang");
				
				if(isset($tensp)) {
				$tensp = $tensp[0]['tensp'];
				$this->view->message = '<div class="alert alert-warning" role="alert">Đã xóa sản phẩm '.$tensp.' </div>';
				}
			}

			if(isset($_REQUEST['capnhat'])) {
				$idgiohang = $_REQUEST['id'];
				$soluong = $_REQUEST['soluong'];
				$this->model->themxoasua("UPDATE giohang SET soluong = $soluong WHERE id = $idgiohang");
				$tensp = $this->model->loaddulieu("SELECT tensp FROM giohang WHERE id = $idgiohang");

				if(isset($tensp)) {
				$tensp = $tensp[0]['tensp'];
				$this->view->message = '<div class="alert alert-success" role="alert">Đã cập nhật sản phẩm '.$tensp.' thành công</div>';
				}
			}

			

			$donhang = $this->model->loaddulieu("SELECT d.trangthaigiaohang,d.trangthai,d.ngaylap,d.id FROM donhang d WHERE idkh = $idkh");
			// $ct_donhang = $this->model->loaddulieu("SELECT * FROM ct_donhang WHERE idkh= $idkh");
			// print_r($donhang); die();
			$ct_donhang = [];
			foreach ($donhang as $value) {
				$iddonhang = $value['id'];

				$ct_donhang[$iddonhang] = $this->model->loaddulieu("SELECT c.tensp,c.soluong,c.gia,c.tennhasx FROM ct_donhang c WHERE iddonhang = $iddonhang");
				
			}

			

			$data = $this->model->loaddulieu("SELECT * FROM giohang WHERE idkh = $idkh");

			// $chungloai = $this->model->loaddulieu("SELECT folder FROM chungloai WHERE trangthai = 1");

			$this->view->donhang = $donhang;
			$this->view->ct_donhang = $ct_donhang;
			$this->view->data = $data;


			$this->view->render('cart');


		}




	}

?>