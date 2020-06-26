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
}

?>