<?php
class datbasekhachhang{
	function database()
	{
		$dsn="mysql:host=localhost;dbname=";

       $username='';

       $password='';

       $options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');

       $dbh = new PDO($dsn,$username,$password,$options);

       return $dbh;

	}
}
?>