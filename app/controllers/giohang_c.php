<?php
	class giohang extends Controller {
		public function index(){

			if(isset($_SESSION['id'])) {
				$idkh = $_SESSION['id'];
			}else {
				$idkh = 0;
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