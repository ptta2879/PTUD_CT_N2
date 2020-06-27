<?php
include('models/databaseKH.php');
include('views/page/trangchu_v.php');
class TrangChu 
{
	function banner()
	{
		$p = new databasePDO();
		$v = new viewHome();
		$slide=$p->loaddulieu('SELECT * FROM tintuc ORDER BY vitri asc');
		$v->tintuc($slide);
	}
	function danhmuc()
	{
		$p=new databasePDO();
		$v=new viewHome();
		$dulieu=$p->loaddulieu('SELECT n.id,tennhasanxuat,idchungloai FROM nhasanxuat n JOIN chungloai c on n.idchungloai=c.id WHERE c.trangthai=1');
		$v->danhmuc($dulieu);
	}
	function sanphammoi()
	{
		$p = new databasePDO();
		$v = new viewHome();
		$dulieu=$p->loaddulieu("SELECT * FROM sanpham");
	}
}

?>