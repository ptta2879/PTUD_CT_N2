<?php 
include ('models/databaseKH.php');
class dangky
{
	function dangkytk($lastname,$name,$user,$pass,$sdt,$diachi)
	{
		$p=new databasePDO();
		$phanquyen = 0;
		$thongbao=$p->themdulieuuser($user,$pass,$lastname,$name,$phanquyen,$sdt,$diachi);
		if($thongbao == 1)
		{
			echo 'Đăng ký thành công';
			echo '<META http-equiv="refresh" content="3;URL=signIn.php" charset="utf-8"/>';
		}
		else
		{
			echo 'Đăng ký không thành công';
		}
	}
}
?>