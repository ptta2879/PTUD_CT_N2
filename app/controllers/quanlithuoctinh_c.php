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
				$this->model->themxoasua("INSERT INTO thuoctinh(tenthuoctinh,trangthai,vitri,kieudulieu,mota) VALUES('$ten',0,0,'$type','$mota')");

				$this->view->message = "them thuoc tinh thanh cong";

			}

			if(isset($_REQUEST['submit']) && isset($_REQUEST['check_list'])) {
				// $id = $_REQUEST['id'];
				// print_r($_REQUEST); die();
				$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 0");
				$id = $_REQUEST['check_list'];
				foreach ($id as $check) {
					$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 1 WHERE id=$check");
				}
				
				
				

			}
			
			$this->view->data = $this->model->loaddulieu("SELECT * FROM thuoctinh");

			$this->view->render('quanli_thuoctinh');		
		}		
	}


?>