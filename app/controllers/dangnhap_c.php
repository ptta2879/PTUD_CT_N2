<?php 

class dangnhap extends Controller
{
	function index()
	{
		// $p = new databasePDO();
		// $this->view->render('signIn');
		// session_start();
		if(isset($_REQUEST['nut'])){
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];

			$password=md5($password);
			$thongbao = $this->model->loaddulieu("SELECT * FROM taikhoan where username = '$username' and password='$password'");
			$i = count($thongbao);
			if($i == 1)
			{
				for($a=0;$a<$i;$a++)
				{
					$row=$thongbao[$a];
					$id=$row['id'];
					$username=$row['username'];
					$password=$row['password'];
					$hotendem=$row['hotendem'];
					$phanquyen=$row['phanquyen'];
					$ten = $row['ten'];
					$sdt = $row['sdt'];
					$diachi = $row['diachi'];

					//session//
					$_SESSION['id'] = $id;
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					$_SESSION['hotendem']=$hotendem;
					$_SESSION['phanquyen']=$phanquyen;
					$_SESSION['ten']=$ten;
					$_SESSION['sdt']=$sdt;
					$_SESSION['diachi']=$diachi;
				}

				
			}
			else 
			{
				// echo'<p class="font-weight-bold">Bạn đã nhập sai mật khẩu hay tài khoản</p>';
				// $this->view->message='<p class="font-weight-bold">Bạn đã nhập sai mật khẩu hay tài khoản</p>';
				$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn đã nhập sai mật khẩu hoặc tài khoản
				</div>';

			}
		
             
		}


		if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi']))
		{
		  echo '<script type="text/javascript">window.location="trangchu"</script>';
		}

		$this->view->render('signIn');
 
	
	}
}
?>