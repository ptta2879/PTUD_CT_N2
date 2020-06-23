<?php
class databasekhachhang{
	function database()
	{
		$dsn="mysql:host=localhost;dbname=db_vuive";

		$username='vuive';

		$password='123456';

		$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');

		$dbh = new PDO($dsn,$username,$password,$options);

		return $dbh;

	}

	function loaddulieu($sql)

    {

        $link=$this->database();

        $ketqua=$link->prepare($sql);

        $ketqua->setFetchMode(PDO::FETCH_ASSOC);

        $ketqua->execute();

        return $ketqua->fetchAll();

    }
}
?>