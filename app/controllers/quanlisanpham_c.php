<?php
	class quanlisanpham extends Controller {

		public function index(){
			$chungloai = $this->model->loaddulieu("SELECT id FROM chungloai WHERE trangthai =1");
			// print_r($chungloai); die();
			$idchungloai = $chungloai[0]['id'];

			


			if(isset($_GET['xoa'])) {
				$idsp = $_GET['xoa'];
				// print_r($idsp); die();
				$tensanpham = $this->model->loaddulieu("SELECT tensp FROM sanpham WHERE id = $idsp");
				// print_r($tensanpham); die();
				$tensp = $tensanpham[0]['tensp'];
				$idkho = $this->model->loaddulieu("SELECT idkho FROM sanpham WHERE id = $idsp");
				$idkho = $idkho[0]['idkho'];
				// print_r("DELETE * FROM khohang WHERE id= $idkho"); die();
				$this->model->themxoasua("DELETE FROM khohang WHERE id= $idkho");
				$this->model->themxoasua("DELETE FROM sanpham WHERE id = $idsp");
				$targetDir = '.'.LINK;
				unlink($targetDir.$idsp.'_hinhdaidien_.png');
				unlink($targetDir.$idsp.'_1_mota_.png');
				// unlink($targetDir.$idsp.'_1_mota_.png');
				$this->view->message = '<div class="alert alert-warning" role="alert">Đã xóa sản phẩm '.$tensp.' </div>';
				// echo 'ádsadaasdsa'; die();
			}


			$sanpham = $this->model->loaddulieu("SELECT * FROM sanpham WHERE idchungloai = $idchungloai");
			// print_r($sanpham); die();
			$soluong = [];
			foreach ($sanpham as $value) {
				$id = $value['idkho'];
				$soluong[$id] = $this->model->loaddulieu("SELECT soluong FROM khohang WHERE id = $id");
			}



			// print_r($soluong); die();
			$this->view->soluong = $soluong;
			$this->view->sanpham = $sanpham;
			$this->view->render('quanli_sanpham');
		}

		public function themsanpham(){
			$this->view->data = $this->model->loaddulieu("SELECT * FROM `thuoctinh` where trangthai = 1");
			$chungloai = $this->model->loaddulieu("SELECT id FROM chungloai WHERE trangthai =1");
				// print_r($chungloai); die();
			$idchungloai = $chungloai[0]['id'];

			if(isset($_REQUEST['themsanpham'])) {
				
				$soluong = $_REQUEST['soluong'];
			
				$_REQUEST = array_slice($_REQUEST,1,count($_REQUEST) -2);
				
				$column_names = $values = '';
				foreach ($_REQUEST as $key => $value) {
					if($key != 'soluong' && $key != 'tennhasx') {
						$column_names .= ','.$key;
						$values .= ",'".$value."'";
					}
				}
			
				$idkho = $this->model->themxoasua("INSERT INTO khohang(soluong) VALUE($soluong)");
				// echo "INSERT INTO sanpham(idchungloai,idkho$column_names) VALUES($idchungloai,$idkho$values)"; die();
				$idsp = $this->model->themxoasua("INSERT INTO sanpham(idchungloai,idkho$column_names) VALUES($idchungloai,$idkho$values)");


				
				// $targetDir = $chungloai[0]['folder']."/";
				$targetDir = '.'.LINK;
				// $allowTypes = array('jpg','png','jpeg');
				$allowTypes = array('png','jpg','jpeg');
				$stt = 0;
				$success = 0;
				// $idsp = 1;
				$tensp = $_REQUEST['tensp'];

				// print_r($_FILES); die();
				$fileName = $_FILES['hinhdaidien']['name'];
				if($idsp > 0 && isset($fileName)) {
					$fileName = $_FILES['hinhdaidien']['name'];
		            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		            $name = $idsp.'_hinhdaidien_.png';

		            $targetFilePath = $targetDir . $name; 

			 		// print_r($targetFilePath); die();
		            if(in_array($fileType, $allowTypes)){ 
		                if(move_uploaded_file($_FILES["hinhdaidien"]["tmp_name"], $targetFilePath)) {
		                	$success+=1;
		            	}
		        	}
				}

			    $fileNames = array_filter($_FILES['files']['name']);
			    // print_r($fileNames); die();
			    if($idsp > 0 && isset($fileNames)){ 
			        foreach($_FILES['files']['name'] as $key=>$val){ 

			        	$stt+=1;
			            // $fileName = basename($_FILES['files']['name'][$key]);
			            $fileName = $_FILES['files']['name'][$key];
			            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
			            $name = $idsp.'_'.$stt.'_mota_.png';

			            // $targetFilePath = $targetDir . $fileName; 
			            $targetFilePath1 = $targetDir . $name; 
			          	// print($targetFilePath1); die();
			            if(in_array($fileType, $allowTypes)){ 
			                // Upload file to server 

			                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath1)){ 
			                	$success+=1;
			                	// print_r($success); die();
			            	}
			        	}
			        }
				}
				if($success >= 2){ 
					// echo 'them oxndfd'; die();
					$this->view->message =  '<div class="alert alert-success" role="alert">Thêm sản phẩm '.$tensp.' thành công</div>';
				}
				// die();
			}
			$result = $this->model->loaddulieu("SELECT id,tennhasanxuat FROM nhasanxuat WHERE idchungloai =$idchungloai");
			// print_r($result); die();

			$this->view->nhasanxuat = $result;
		$this->view->render('themsp');
		}




		public function suasanpham(){

			$idsp = $_REQUEST['idsp'];

			$thuoctinh = $this->model->loaddulieu("SELECT tenthuoctinh FROM thuoctinh WHERE trangthai = 1");
			$select = '';
			// print_r($thuoctinh); die();
			foreach ($thuoctinh as  $value) {
				if($value['tenthuoctinh'] != 'mota') {
					$select .= ','.$value['tenthuoctinh'];
				}
			}

			// print_r($select); die();
			$select = substr($select, 1);
			// echo "SELECT $select,tensp,gia,mota,idkho,idnhasx,idchungloai FROM sanpham WHERE id = $idsp";
			$sanpham = $this->model->loaddulieu("SELECT $select,tensp,gia,mota,idkho,idnhasx,idchungloai FROM sanpham WHERE id = $idsp");

			// print_r($sanpham); die();
			$idchungloai = $sanpham[0]['idchungloai'];
			$idkho = $sanpham[0]['idkho'];
			// $soluong = $this->model->loaddulieu("SELECT soluong FROM khohang WHERE id= $idkho");

			// $nhasanxuat = $this->model->loaddulieu("SELECT id,tennhasanxuat FROM nhasanxuat WHERE idchungloai  = $idchungloai");

			// $this->view->soluong = $soluong[0]['soluong'];
			// $this->view->data = $this->model->loaddulieu("SELECT * FROM `thuoctinh` where trangthai = 1");
			// $this->view->nhasanxuat = $nhasanxuat;
			// $this->view->sanpham = $sanpham[0];


			if(isset($_REQUEST['suasanpham'])) {
				
				
			
				$_REQUEST = array_slice($_REQUEST,1,count($_REQUEST) -2);

				// print_r($_REQUEST); die();
				
				// $column_names = $values = '';
				foreach ($_REQUEST as $key => $value) {
					if(!empty($value) && $key != 'idsp' && $key != 'soluong'){
						// echo "UPDATE sanpham SET $key = '$value' WHERE id = $idsp";
						$this->model->themxoasua("UPDATE sanpham SET $key = '$value' WHERE id = $idsp");
					}
				}
				// die();
				if(isset($_REQUEST['soluong'])) {
					$soluong = $_REQUEST['soluong'];
					$this->model->themxoasua("UPDATE khohang SET soluong = $soluong WHERE id = $idkho");
				}
				// echo "INSERT INTO sanpham(idchungloai,idkho$column_names) VALUES($idchungloai,$idkho$values)"; die();
				


				
				// $targetDir = $chungloai[0]['folder']."/";
				$targetDir = '.'.LINK;
				// $allowTypes = array('jpg','png','jpeg');
				$allowTypes = array('png','jpg','jpeg');
				$stt = 0;
				$success = 0;
				// $idsp = 1;
				$tensp = $_REQUEST['tensp'];

				// print_r($_FILES); die();
				if(!empty($_FILES['hinhdaidien']['name']) && $idsp > 0) {
					$fileName = $_FILES['hinhdaidien']['name'];
		            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		            $name = $idsp.'_hinhdaidien_.png';

		            $targetFilePath = $targetDir . $name; 
			 		// print_r($targetFilePath); die();
		            if(in_array($fileType, $allowTypes)){
		            	unlink($targetFilePath);
		                if(move_uploaded_file($_FILES["hinhdaidien"]["tmp_name"], $targetFilePath)) {
		                	$success+=1;
		                	// print_r($targetFilePath); die();
		            	}
		        	}
				}

			    $fileNames = array_filter($_FILES['files']['name']);
			    // print_r($fileNames); die();
			    if(!empty($fileNames) && $idsp > 0){ 
			        foreach($_FILES['files']['name'] as $key=>$val){ 

			        	$stt+=1;
			            // $fileName = basename($_FILES['files']['name'][$key]);
			            $fileName = $_FILES['files']['name'][$key];
			            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
			            $name = $idsp.'_'.$stt.'_mota_.png';

			            // $targetFilePath = $targetDir . $fileName; 
			            $targetFilePath1 = $targetDir . $name; 
			          
			            if(in_array($fileType, $allowTypes)){ 
			                // Upload file to server 
			                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath1)){ 
			                	$success+=1;
			                	// print_r($success); die();
			            }
			        }
			        }
				}
				// if($success == 2){ 
				// 	$this->view->message =  '<div class="alert alert-success" role="alert">Sửa sản phẩm '.$tensp.' thành công</div>';
				// }
				$this->view->message =  '<div class="alert alert-success" role="alert">Sửa sản phẩm '.$tensp.' thành công</div>';
				// die();
			}
			$sanpham = $this->model->loaddulieu("SELECT $select,tensp,gia,mota,idkho,idnhasx,idchungloai FROM sanpham WHERE id = $idsp");

			$soluong = $this->model->loaddulieu("SELECT soluong FROM khohang WHERE id= $idkho");

			$nhasanxuat = $this->model->loaddulieu("SELECT id,tennhasanxuat FROM nhasanxuat WHERE idchungloai  = $idchungloai");

			$this->view->soluong = $soluong[0]['soluong'];
			$this->view->data = $this->model->loaddulieu("SELECT * FROM `thuoctinh` where trangthai = 1");
			$this->view->nhasanxuat = $nhasanxuat;
			$this->view->sanpham = $sanpham[0];

			$this->view->render('suasanpham');


			// print_r($nhasanxuat); die();
		}

	}


?>