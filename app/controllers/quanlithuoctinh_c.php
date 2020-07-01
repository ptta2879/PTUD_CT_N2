<?php
	class quanlithuoctinh extends Controller {

		public function index(){

			if(isset($_REQUEST['themthuoctinh'])) {
				$mota = $_REQUEST['tenthuoctinh'];
				$type = $_REQUEST['type'];

				// print_r($ten);
				// print_r($type);
				// die();
				$ten = $this->model->vn_to_str($mota);
				// print_r($ten);
				// print_r($result);
				// die();
				$this->model->themxoasua("ALTER TABLE sanpham ADD COLUMN $ten $type");	
				$this->model->themxoasua("INSERT INTO thuoctinh(tenthuoctinh,trangthai,vitri,mota) VALUES('$ten',0,0,'$mota')");

				$this->view->message = "them thuoc tinh thanh cong";

			}

			if(isset($_REQUEST['submit'])) {
				// $id = $_REQUEST['id'];
				print_r($_REQUEST); die();
			}
			
			$this->view->data = $this->model->loaddulieu("SELECT * FROM thuoctinh");

			$this->view->render('quanli_thuoctinh');		
		}		
	}


?>