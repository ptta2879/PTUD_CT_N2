<?php
session_start();
	require_once 'config.php';
	require_once 'lib/Loader.php';
	require_once 'lib/Controller.php';
	require_once 'lib/Model.php';
	require_once 'lib/View.php';
	
	// function __autoload($class) {
	// 	require_once 'lib/'.$class.'.php';
	// }

	$loader = new Loader();

	
?>