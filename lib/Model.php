<?php

	class Model {
		public function connect() {
			
			$dsn="mysql:host=localhost;dbname=testpost";
			$username='staff';
			$password='123';
			$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');
			$dbh = new PDO($dsn,$username,$password,$options);
			return $dbh;
		}
	}
	

?>