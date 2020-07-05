<?php
	class quanlichungloai extends Controller {

		public function index() {
			if (isset($_REQUEST['themchungloai'])) {
				$ten = $_REQUEST['tenchungloai'];
				
				$dir = $this->model->vn_to_str(LINK.$ten);

				// die($dir);
				
 

				// Kiểm tra thư mục đã tồn tại hay chưa
				if(!file_exists($dir)){
				    // Tạo một thư mục mới
				    if(mkdir($dir)){
				        // echo "Tạo thư mục thành công.";
				        $insert = $this->model->themxoasua("INSERT INTO chungloai(ten,folder,trangthai) VALUES('$ten','$dir',0)");
				        if($insert > 0) { $this->view->message = '<div class="alert alert-success" role="alert">Thêm chủng loại '.$ten.' thành công</div>';}
				        
				    } else{
				        echo "ERROR: Không thể tạo thư mục.";
				    }
				} else{
				    echo "ERROR: Thư mục đã tồn tại.";
				}
				
			}


			if(isset($_REQUEST['submit'])) {
				$idchungloai = $_REQUEST['check'];

				$this->model->themxoasua("UPDATE chungloai SET trangthai = 0");
				$this->model->themxoasua("UPDATE chungloai SET trangthai = 1 WHERE id= $idchungloai");
			}
			$this->view->data = $this->model->loaddulieu("SELECT * FROM chungloai");

		$this->view->render('quanli_chungloai');
		}
		

	}
?>