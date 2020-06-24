<?php
include('models/databaseKH.php');
include('views/viewHome.php');
class home
{
	function banner()
	{
		$p = new databasePDO();
		$v = new viewHome();
		$slide=$p->loaddulieu('SELECT * FROM tintuc');
		$v->tintuc($slide);
	}
}

?>