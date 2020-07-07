<?php
	class giohang extends Controller {
		public function index(){

			$idkh = $_SESSION['id'];
			$hovatendem = $_SESSION['hotendem'];
			$ten = $_SESSION['ten'];
			$sdt = $_SESSION['sdt'];
			$diachi = $_SESSION['diachi'];
				$date = time();

			$data = $this->model->loaddulieu("SELECT * FROM giohang WHERE idkh = $idkh");

			// $chungloai = $this->model->loaddulieu("SELECT folder FROM chungloai WHERE trangthai = 1");

			$this->view->data = $data;


			$this->view->render('cart');
		}
	}

?>