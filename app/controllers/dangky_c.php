<?php 
class dangky extends Controller

{
	function index()
	{
		// $p =new databasePDO();
		// $this->view->render('signUp');

		if(isset($_REQUEST['nut'])) {
			$hovatendem=$_REQUEST['hotendem'];
			$name=$_REQUEST['ten'];
			$user=$_REQUEST['email'];
			$pass=md5($_REQUEST['matkhau']);
			$sdt=$_REQUEST['sdt'];
			$diachi=$_REQUEST['DiaChi'];
	   

			$phanquyen = 0;
			$thongbao= $this->model->themdulieuuser($user,$pass,$hovatendem,$name,$phanquyen,$sdt,$diachi);
			if($thongbao == 1)
			{
				// echo 'Đăng ký thành công';
				$this->view->message = '<div class="alert alert-success" role="alert">Đăng ký thành công</div>';
				// echo '<script type="text/javascript"> alert('.$this->view->message.')</script>';
				// echo '<META http-equiv="refresh" content="3;URL=dangnhap" charset="utf-8"/>';
				// echo '<script type="text/javascript">window.location="dangnhap"</script>';
			}
			else
			{
				// echo 'Đăng ký không thành công';
				$this->view->message = '<div class="alert alert-danger" role="alert"> Đăng ký không thành công </div>';
			}
		}

		$this->view->render('signUp');

		}
		// print_r($this->view);
		// die();
}
?>