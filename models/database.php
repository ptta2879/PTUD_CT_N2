<?php
class database{
	function ketnoi()
	{
		$dsn="mysql:host=localhost;dbname=db_vuive";

		$username='vuive';

		$password='123456';

		$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');

		$dbh = new PDO($dsn,$username,$password,$options);
		return $dbh;

	}

}
?>