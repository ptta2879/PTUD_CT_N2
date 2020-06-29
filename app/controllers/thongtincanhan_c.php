<?php
	class thongtincanhan extends Controller {

		public function index() {
			if(isset($_SESSION['username'])) {
				$username = $_SESSION['username'];
				$password = $_SESSION['password'];
				if(isset($_REQUEST['suathongtin'])){
					$update = [
						"ten" => null,
						"hotendem" => null,
						"username" => null,
						"sdt" => null,
						"diachi" => null
					];

					$up_count = 0;
					foreach ($update as $key => $value) {
						if(isset($_REQUEST[$key])){
							$update[$key] = $_REQUEST[$key];

							// $up_count += $this->model->themxoasua("UPDATE taikhoan SET $key = '$value' WHERE username = '$username'");

						}
					}

					$update = array_filter($update);
					
					// die();
					// print_r($username);
					$up_count = 0;
					foreach ($update as $key => $value) {
						// echo $key."=>".$value;
						$up_count += $this->model->themxoasua("UPDATE taikhoan SET $key = '$value' WHERE username = '$username'");
						// echo $key."=>".$value;
						// die();
					}
					if($up_count == count($update)) {
						foreach ($update as $key => $value) {
							$_SESSION[$key] = $value;
						}
						$this->view->message = '<div class="alert alert-success" role="alert">
							Cập nhật thông tin thành công
						</div>';
						// print_r($_SESSION); die();
					}
					// print_r($update);
					// print_r($_REQUEST);
					// die();
				}


				if(isset($_REQUEST['doimatkhau'])) {
					$password_hientai = md5($_REQUEST['current_pass']);
					$password_moi = md5($_REQUEST['new_pass']);
					$password_xacnhan = md5($_REQUEST['confirm_pass']);
					// echo $password_hientai."=>".$password."=>".$password_moi."=>".$password_xacnhan; die();
					// echo $username; die();

					if($password_hientai == $password && $password_moi == $password_xacnhan){
						$return = $this->model->themxoasua("UPDATE taikhoan SET password = '$password_moi' WHERE username = '$username'");
						// print_r($return); die();
						if($return) {
							$_SESSION['password'] = $password_moi;
							$this->view->message = '<div class="alert alert-success" role="alert">
							Cập nhật mật khẩu thành công
						</div>';
						}
						
					}
					else {
							$this->view->message = '<div class="alert alert-danger" role="alert">
							Cập nhật mật khẩu không thành công
						</div>';
					}
				}

				
				$username = $_SESSION['username'];
				$password = $_SESSION['password'];
				// print_r($_SESSION);
				// print_r($username);
				$result = $this->model->loaddulieu("SELECT * FROM taikhoan where username = '$username' and password='$password'");

				// print_r(count($result));
				// print_r($result);
				// die();

				if($result){
					$this->view->data = $result[0];
						
				}

				$this->view->render('thongtincanhan');
			}
			else {
				echo '<script type="text/javascript">window.location="trangchu.html"</script>';
			}
			
		}
	}


?>