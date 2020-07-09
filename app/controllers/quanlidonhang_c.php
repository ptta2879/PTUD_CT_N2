<?php
	class quanlidonhang extends Controller {
		public function index() {

			

			if(isset($_REQUEST['capnhat'])) {
		
				$id = $_REQUEST['id'];
				// print_r($_REQUEST);
				// print_r($id); die();
				// print_r($_REQUEST); die();	
				// if($_REQUEST['check_list']) {
					$trangthai = $_REQUEST['check_list'];								
					$this->model->themxoasua("UPDATE donhang SET trangthai = $trangthai WHERE id=$id");
				// }
				// else {
				// 	$this->model->themxoasua("UPDATE thuoctinh SET vitri = 0 WHERE id=$id");
				// 	$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 0 WHERE id=$id");
				// }

				if(isset($_REQUEST['trangthaigiaohang']) && $_REQUEST['check_list'] == 1) {
					$trangthaigiaohang = $_REQUEST['trangthaigiaohang'];
					$this->model->themxoasua("UPDATE donhang SET trangthaigiaohang = '$trangthaigiaohang' WHERE id=$id");
				
				}
				else {
					$this->model->themxoasua("UPDATE donhang SET trangthaigiaohang = 'Chưa giao' WHERE id=$id");
				}
			}


			$donhang = $this->model->loaddulieu("SELECT * FROM donhang");

			// print_r($donhang); die();
			$ct_donhang = [];
			foreach ($donhang as $value) {
				$iddonhang = $value['id'];

				$ct_donhang[$iddonhang] = $this->model->loaddulieu("SELECT c.tensp,c.soluong,c.gia,c.tennhasx FROM ct_donhang c WHERE iddonhang = $iddonhang");
				
			}

			$this->view->donhang = $donhang;
			$this->view->ct_donhang = $ct_donhang;

			$this->view->render('quanli_donhang');
		}
	}


?>