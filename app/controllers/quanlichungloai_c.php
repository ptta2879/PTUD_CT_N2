<?php
	class quanlichungloai extends Controller {

		public function index() {
			if (isset($_REQUEST['themchungloai'])) {
				$ten = $_REQUEST['tenchungloai'];
				
				// $dir = $this->model->vn_to_str(LINK);
				// $dir = LINK;

				// die($dir);
				$insert = $this->model->themxoasua("INSERT INTO chungloai(ten,trangthai) VALUES('$ten',NULL)");
				if($insert > 0) { 
					$this->view->message = '<div class="alert alert-success" role="alert">Thêm chủng loại '.$ten.' thành công</div>';
 
				}else {
					$this->view->message = '<div class="alert alert-success" role="alert">Thêm chủng loại '.$ten.' không thành công</div>';
				}
				// Kiểm tra thư mục đã tồn tại hay chưa
				// if(!file_exists($dir)){
				//     // Tạo một thư mục mới
				//     if(mkdir($dir)){
				//         // echo "Tạo thư mục thành công.";
				//         $insert = $this->model->themxoasua("INSERT INTO chungloai(ten,folder,trangthai) VALUES('$ten','$dir',0)");
				//         if($insert > 0) { $this->view->message = '<div class="alert alert-success" role="alert">Thêm chủng loại '.$ten.' thành công</div>';}
				        
				//     } else{
				//         echo "ERROR: Không thể tạo thư mục.";
				//     }
				// } else{
				//     echo "ERROR: Thư mục đã tồn tại.";
				// }
				
			}


			if(isset($_REQUEST['capnhat'])) {

				$idchungloai = $_REQUEST['id'];
				
				if($_REQUEST['check'] == 0){
					// $trangthai = NULL;
					$idchungloai = $this->model->themxoasua("UPDATE chungloai SET trangthai = NULL WHERE id = $idchungloai");
				}
				else {
					$trangthai = $_REQUEST['check'];
					// $idchungloai = $this->model->themxoasua("UPDATE chungloai SET trangthai = $trangthai WHERE id = $idchungloai");

					if($this->model->themxoasua("UPDATE chungloai SET trangthai = $trangthai WHERE id = $idchungloai")) {
						$this->view->message = '<div class="alert alert-danger" role="alert">
					  Bạn không thể hiển thị nhiều chủng loại cùng lúc
					</div>';
					}
				}
				
			}


			$this->view->data = $this->model->loaddulieu("SELECT * FROM chungloai");

			$this->view->render('quanli_chungloai');
		}
		

	}
?>