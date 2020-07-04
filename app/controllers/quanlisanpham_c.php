<?php
	class quanlisanpham extends Controller {

		public function index(){
			$this->view->render('quanli_sanpham');
		}

		public function themsanpham(){
			$this->view->data = $this->model->loaddulieu("SELECT * FROM `thuoctinh` where trangthai = 1");

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
				// echo "INSERT INTO sanpham(idnhasx,idchungloai,soluongban,mota,idkho$column_names) VALUES(1,1,0,'sađá',$idkho$values)"; die();
				$idsp = $this->model->themxoasua("INSERT INTO sanpham(idnhasx,idchungloai,soluongban,mota,idkho$column_names) VALUES(1,1,0,'asdads',$idkho$values)");


				$chungloai = 'dienthoai';
				$targetDir = "./app/views/assets/img/sanpham/".$chungloai."/";
				$allowTypes = array('jpg','png','jpeg');
				$stt = 0;
				// $idsp = 1;
				$tensp = $_REQUEST['tensp'];

				// print_r($_FILES); die();
				if(!empty($_FILES['hinhdaidien']['name'])) {
					$fileName = $_FILES['hinhdaidien']['name'];
		            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		            $name = $tensp.'_hinhdaidien_'.$idsp.'.'.$fileType;

		            $targetFilePath = $targetDir . $name; 
			 
		            if(in_array($fileType, $allowTypes)){ 
		                if(move_uploaded_file($_FILES["hinhdaidien"]["tmp_name"], $targetFilePath)) {
		            	}
		        	}
				}

     
			//     // $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
			    $fileNames = array_filter($_FILES['files']['name']);
			    // print_r($fileNames); die();
			    if(!empty($fileNames)){ 
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
				$this->view->message = 'them san pham thanh cong';
				// die();
			}

		$this->view->render('themsp');
		}


	}


?>