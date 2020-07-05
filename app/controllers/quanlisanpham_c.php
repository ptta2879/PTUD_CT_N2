<?php
	class quanlisanpham extends Controller {

		public function index(){
			$this->view->render('quanli_sanpham');
		}

		public function themsanpham(){
			$this->view->data = $this->model->loaddulieu("SELECT * FROM `thuoctinh` where trangthai = 1");
			$chungloai = $this->model->loaddulieu("SELECT id,folder FROM chungloai WHERE trangthai =1");
				// print_r($chungloai); die();
			$idchungloai = $chungloai[0]['id'];

			if(isset($_REQUEST['themsanpham'])) {
				
				$soluong = $_REQUEST['soluong'];
			
				$_REQUEST = array_slice($_REQUEST,1,count($_REQUEST) -2);
				
				$column_names = $values = '';
				foreach ($_REQUEST as $key => $value) {
					if($key != 'soluong') {
						$column_names .= ','.$key;
						$values .= ",'".$value."'";
					}
				}
			
				$idkho = $this->model->themxoasua("INSERT INTO khohang(soluong) VALUE($soluong)");
				// echo "INSERT INTO sanpham(idchungloai,idkho$column_names) VALUES($idchungloai,$idkho$values)"; die();
				$idsp = $this->model->themxoasua("INSERT INTO sanpham(idchungloai,idkho$column_names) VALUES($idchungloai,$idkho$values)");


				
				$targetDir = $chungloai[0]['folder']."/";
				$allowTypes = array('jpg','png','jpeg');
				$stt = 0;
				$success = 0;
				// $idsp = 1;
				$tensp = $_REQUEST['tensp'];

				// print_r($_FILES); die();
				if(!empty($_FILES['hinhdaidien']['name']) && $idsp > 0) {
					$fileName = $_FILES['hinhdaidien']['name'];
		            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		            $name = $tensp.'_hinhdaidien_'.$idsp.'.'.$fileType;

		            $targetFilePath = $targetDir . $name; 
			 
		            if(in_array($fileType, $allowTypes)){ 
		                if(move_uploaded_file($_FILES["hinhdaidien"]["tmp_name"], $targetFilePath)) {
		                	$success+=1;
		            	}
		        	}
				}

     
			//     // $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
			    $fileNames = array_filter($_FILES['files']['name']);
			    // print_r($fileNames); die();
			    if(!empty($fileNames) && $idsp > 0){ 
			        foreach($_FILES['files']['name'] as $key=>$val){ 
			//             // File upload path 
			        	$stt+=1;
			            // $fileName = basename($_FILES['files']['name'][$key]);
			            $fileName = $_FILES['files']['name'][$key];
			            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
			            $name = $tensp.'_mota_'.$idsp.'_'.$stt.'.'.$fileType;

			            // $targetFilePath = $targetDir . $fileName; 
			            $targetFilePath1 = $targetDir . $name; 
			            // echo '<pre>'.$targetFilePath.'</pre>';
			            // echo '<pre>'.$targetFilePath1.'</pre>';
			             
			            // Check whether file type is valid 
			            // $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
			            if(in_array($fileType, $allowTypes)){ 
			                // Upload file to server 
			                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath1)){ 
			                	$success+=1;
			//                     // Image db insert sql 
			//                     $insertValuesSQL .= "('".$fileName."', NOW()),"; 
			//                 }else{ 
			//                     $errorUpload .= $_FILES['files']['name'][$key].' | '; 
			//                 } 
			//             }else{ 
			//                 $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
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


	}


?>