<?php
class database {

	function databaseconnect()
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

        $link=$this->databaseconnect();

        $ketqua=$link->prepare($sql);

        $ketqua->setFetchMode(PDO::FETCH_ASSOC);

        $ketqua->execute();

        return $ketqua->fetchAll();

    }

    
    function themdulieuuser($user,$pass,$hodem,$ten,$phanquyen,$sdt,$diachi)

    {

	    $link=$this->databaseconnect();

	    $ketqua=$link->prepare("INSERT into taikhoan(username,password,phanquyen,hotendem,ten,sdt,diachi) VALUES(:username, :password,:phanquyen,:hotendem,:ten,:sdt,:diachi)");
	    // print_r($ketqua);
	    // die();

	    $ketqua->bindParam(':username',$user);

	    $ketqua->bindParam(':password',$pass);

	    $ketqua->bindParam(':phanquyen',$phanquyen);

	    $ketqua->bindParam(':hotendem',$hodem);

	    $ketqua->bindParam(':ten',$ten);

	    $ketqua->bindParam(':sdt',$sdt);

	    $ketqua->bindParam(':diachi',$diachi);

	    if($ketqua->execute())

	    {

	      return 1;

	    }

	    else

	    {

	      return 0; 

	    }

    }

}
?>