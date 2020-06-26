<?php 
include('models/databaseKH.php');

	class DangNhap
	{
		function login($user,$pass)
		{
			$p = new databasePDO();
			
			$pass=md5($pass);
			$thongbao=$p->loaddulieu("SELECT * FROM taikhoan where username='$user' and password='$pass'");
			$i = count($thongbao);
			if($i == 1)
			{
				for($a=0;$a<$i;$a++)
				{
					$row=$thongbao[$a];
					$username=$row['username'];
					$password=$row['password'];
					$hotendem=$row['hotendem'];
					$phanquyen=$row['phanquyen'];
					$ten = $row['ten'];
					$sdt = $row['sdt'];
					$diachi = $row['diachi'];

					//session//
					$_SESSION['username']=$username;
					$_SESSION['password']=$password;
					$_SESSION['hotendem']=$hotendem;
					$_SESSION['phanquyen']=$phanquyen;
					$_SESSION['ten']=$ten;
					$_SESSION['sdt']=$sdt;
					$_SESSION['diachi']=$diachi;
				}

				echo '<script type="text/javascript">window.location="index.php"</script>';
			}
			else 
			{
				echo'<p class="font-weight-bold">Bạn đã nhập sai mật khẩu hay tài khoản</p>';
			}
		}
	}
?>