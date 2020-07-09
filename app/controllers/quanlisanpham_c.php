<?php
	class quanlisanpham extends Controller {

		public function index(){
			$chungloai = $this->model->loaddulieu("SELECT id FROM chungloai WHERE trangthai =1");
			// print_r($chungloai); die();
			$idchungloai = $chungloai[0]['id'];

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
				$targetDir = LINK;
				// $allowTypes = array('jpg','png','jpeg');
				$allowTypes = array('png');
				$stt = 0;
				$success = 0;
				// $idsp = 1;
				$tensp = $_REQUEST['tensp'];

				// print_r($_FILES); die();
				if(!empty($_FILES['hinhdaidien']['name']) && $idsp > 0) {
					$fileName = $_FILES['hinhdaidien']['name'];
		            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		            $name = $idsp.'_hinhdaidien_.'.$fileType;

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
			    if(!empty($fileNames) && $idsp > 0){ 
			        foreach($_FILES['files']['name'] as $key=>$val){ 

			        	$stt+=1;
			            // $fileName = basename($_FILES['files']['name'][$key]);
			            $fileName = $_FILES['files']['name'][$key];
			            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
			            $name = $idsp.'_'.$stt.'_mota_.'.$fileType;

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
				if($success == 2){ 
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

			$sanpham = $this->modal->loaddulieu("SELECT * FROM sanpham WHERE id = $idsp");

			

			print_r($idsp); die();
		}

	}


?>