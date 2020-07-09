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
				$this->model->themxoasua("INSERT INTO thuoctinhhome(tenthuoctinh,mota,vitri) VALUES('$ten','$mota',0)");
				$this->model->themxoasua("INSERT INTO thuoctinh(tenthuoctinh,trangthai,vitri,kieudulieu,mota) VALUES('$ten',0,0,'$type','$mota')");

				$this->view->message = "them thuoc tinh thanh cong";

			}

			if(isset($_REQUEST['submit'])) {
		
				$id = $_REQUEST['id'];
				// print_r($_REQUEST); die();	
				if($_REQUEST['check_list'] == 1) {									
					$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 1 WHERE id=$id");
				}
				else {
					$this->model->themxoasua("UPDATE thuoctinh SET vitri = NULL WHERE id=$id");
					$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 0 WHERE id=$id");
				}

				if(isset($_REQUEST['vitri']) && $_REQUEST['check_list'] == 1) {
					$vitri = $_REQUEST['vitri'];
					$this->model->themxoasua("UPDATE thuoctinh SET vitri = $vitri WHERE id=$id");
				
				}
			}


			if(isset($_REQUEST['thuoctinhhome'])) {

				$id = $_REQUEST['id'];
				if($_REQUEST['check'] == 1) {
					$this->model->themxoasua("UPDATE thuoctinhhome SET trangthai = 1 WHERE id=$id");

				}
				else {
					$this->model->themxoasua("UPDATE thuoctinhhome SET vitri = NULL WHERE id=$id");
					$this->model->themxoasua("UPDATE thuoctinhhome SET trangthai = 0 WHERE id=$id");
				}


				if(isset($_REQUEST['vitrihome']) && $_REQUEST['check'] == 1) {
					// print_r($_REQUEST['check']);
					// print_r($_REQUEST);
					$vitri = $_REQUEST['vitrihome'];
					$this->model->themxoasua("UPDATE thuoctinhhome SET vitri = $vitri WHERE id=$id");
				}
				
			}

		
			$this->view->data = $this->model->loaddulieu("SELECT * FROM thuoctinh");
			$this->view->thuoctinhhome = $this->model->loaddulieu("SELECT * FROM thuoctinhhome");

			$this->view->render('quanli_thuoctinh');		
		}		
	}


?>