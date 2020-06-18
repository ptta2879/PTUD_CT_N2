<?php
class databasekhachhang{
	function database()
	{
		$dsn="mysql:host=localhost;dbname=testpost";

		$username='staff';

		$password='123';

		$options=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8');

		$dbh = new PDO($dsn,$username,$password,$options);

		return $dbh;

	}

	function themdulieusp($contents,$id_staff) {

		$link=$this->database();
		$ketqua=$link->prepare("INSERT into post(contents, id_staff) VALUES(:contents, :id_staff)");
		$ketqua->bindParam(':contents',$contents);
		$ketqua->bindParam(':id_staff',$id_staff);
		$ketqua->execute();
		// if($ketqua->execute()) {
		// 	$id=$link->lastInsertId();
		// 	return $id;
		// }
		// else {
		// 	return 0;
		// }
	}
}
?>