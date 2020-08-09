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
				$thongbao = $this->model->themxoasuakhonglastid("INSERT INTO thuoctinh(tenthuoctinh,trangthai,vitri,kieudulieu,mota) VALUES('$ten',0,0,'$type','$mota')");
				if($thongbao != 0) {
					$this->view->message = '<div class="alert alert-success" role="alert">Thêm thuộc tính '.$mota.' thành công</div>';
				}
				else {
					$this->view->message = '<div class="alert alert-danger" role="alert">Thêm thuộc tính '.$mota.' không thành công</div>';
				}

			}

			if(isset($_REQUEST['submit'])) {
		
				$id = $_REQUEST['id'];
				
				$mota = $this->model->loaddulieu("SELECT mota FROM thuoctinh WHERE id=$id");
				$mota = $mota[0]['mota'];
				// print_r($_REQUEST); die();	
				if($_REQUEST['check_list'] == 1) {								
					// $this->model->themxoasua("UPDATE thuoctinh SET trangthai = 1 WHERE id=$id");
					$vitri = $_REQUEST['vitri'];
					if($vitri != 0){
						$thongbao = $this->model->themxoasuakhonglastid("UPDATE thuoctinh SET vitri = $vitri WHERE id=$id");
						if($thongbao != 0){

							$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 1 WHERE id=$id");
							$this->view->message = '<div class="alert alert-success" role="alert">Chọn thuộc tính <span class="font-weight-bold">'.$mota.'</span> hiển thị thành công</div>';
						}
						else {
							$this->view->message = '<div class="alert alert-warning" role="alert">Thuộc tính <span class="font-weight-bold">'.$mota.'</span> bị trùng vói vị trí hiển thị của thuộc tính khác</div>';
						}
					}
					else {
						$this->view->message = '<div class="alert alert-warning" role="alert">Bạn chưa chọn vị trí hiển thị cho thuộc tính <span class="font-weight-bold">'.$mota.'</span></div>';
					}

					
				}
				else {
					$trthai = $this->model->loaddulieu("SELECT trangthai FROM thuoctinh WHERE id=$id");
					$trthai = $trthai[0]['trangthai'];
					if($trthai == 1) {
						$this->model->themxoasua("UPDATE thuoctinh SET vitri = NULL WHERE id=$id");
						$this->model->themxoasua("UPDATE thuoctinh SET trangthai = 0 WHERE id=$id");
						$this->view->message = '<div class="alert alert-secondary" role="alert">Thuộc tính <span class="font-weight-bold">'.$mota.'</span> đã được ẩn</div>';
					}
					else {
					// $this->model->themxoasua("UPDATE thuoctinh SET vitri = NULL WHERE id=$id");
					// $this->model->themxoasua("UPDATE thuoctinh SET trangthai = 0 WHERE id=$id");
						$this->view->message = '<div class="alert alert-warning" role="alert">Bạn chưa bật trạng thái thuộc tính <span class="font-weight-bold">'.$mota.'</span></div>';
					}
				}

			}


			if(isset($_REQUEST['thuoctinhhome'])) {
		
				$id = $_REQUEST['id'];
				
				$mota = $this->model->loaddulieu("SELECT mota FROM thuoctinhhome WHERE id=$id");
				$mota = $mota[0]['mota'];
				// print_r($_REQUEST); die();	
				if($_REQUEST['check'] == 1) {								
					
					$vitri = $_REQUEST['vitrihome'];
					if($vitri != 0){
						$thongbao = $this->model->themxoasuakhonglastid("UPDATE thuoctinhhome SET vitri = $vitri WHERE id=$id");
						if($thongbao != 0){

							$this->model->themxoasua("UPDATE thuoctinhhome SET trangthai = 1 WHERE id=$id");
							$this->view->messagehome = '<div class="alert alert-success" role="alert">Chọn thuộc tính <span class="font-weight-bold">'.$mota.'</span> hiển thị thành công</div>';
						}
						else {
							$this->view->messagehome = '<div class="alert alert-warning" role="alert">Thuộc tính <span class="font-weight-bold">'.$mota.'</span> bị trùng vói vị trí hiển thị của thuộc tính khác</div>';
						}
					}
					else {
						$this->view->messagehome = '<div class="alert alert-warning" role="alert">Bạn chưa chọn vị trí hiển thị cho thuộc tính <span class="font-weight-bold">'.$mota.'</span></div>';
					}

					
				}
				else {
					$trthai = $this->model->loaddulieu("SELECT trangthai FROM thuoctinhhome WHERE id=$id");
					$trthai = $trthai[0]['trangthai'];
					if($trthai == 1) {
						$this->model->themxoasua("UPDATE thuoctinhhome SET vitri = NULL WHERE id=$id");
						$this->model->themxoasua("UPDATE thuoctinhhome SET trangthai = 0 WHERE id=$id");
						$this->view->messagehome = '<div class="alert alert-secondary" role="alert">Thuộc tính <span class="font-weight-bold">'.$mota.'</span> đã được ẩn</div>';
					}
					else {

						$this->view->messagehome = '<div class="alert alert-warning" role="alert">Bạn chưa bật trạng thái thuộc tính <span class="font-weight-bold">'.$mota.'</span></div>';
					}
				}

			
			}


		
			$this->view->data = $this->model->loaddulieu("SELECT * FROM thuoctinh");
			$this->view->thuoctinhhome = $this->model->loaddulieu("SELECT * FROM thuoctinhhome");

			$this->view->render('quanli_thuoctinh');		
		}		
	}


?>