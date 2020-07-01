<?php

class Loader {

	protected $controller = "trangchu";
	protected $action = "index";
	protected $params = [];


	function __construct() {
		session_start();
		$url = $this->UrlProcess();
		// print_r($url);

		if($url[0] == 'dangxuat')
		{
			// $nutdangxuat=$_REQUEST['dangxuat'];			
            session_destroy();
            echo '<META http-equiv="refresh" content="0;URL=trangchu" charset="utf8">';
             
        }

		if (file_exists("./app/controllers/".$url[0]."_c.php")) {
			// require_once "./app/controllers/".$arr[0].".php";
			$this->controller = $url[0];
			unset($url[0]);
		}

		require_once "./app/controllers/".$this->controller."_c.php";
		$this->controller = new $this->controller;

		if(isset($url[1])) {
			if (method_exists( $this->controller, $url[1])) {
				$this->action = $url[1];
				unset($url[1]);
			}
		}

		
		if(isset($url)) {
			$this->params = array_values($url);
		}


		// print_r($this->controller); die();
		

		
		// print_r($_SESSION);
		// die();


         // print_r($this->action); die();
		$this->controller->{$this->action}($this->params);

		// call_user_func_array(array($this->controller, $this->action), $this->params);
	}




	function UrlProcess() {
		if(isset($_GET["url"]) ) {
			$result = explode(".", $_GET["url"],2);
			return explode("/",filter_var(trim($result[0],"/")));

		}
	}
}


?>