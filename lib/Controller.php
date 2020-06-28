<?php

	class Controller
	{
		
		public function __construct()
		{
			// require_once 'app/models/database.php';
			// $this->model = new database();
			// print_r($this->model);
			$this->setView();
			$this->setModel();
			// print_r($this);
		}


		// public function model(){
		// 	require_once 'app/models/database.php';
		// 	return new database();
		// }

		public function setView() {
			$this->view = new View();
			// return new View();
		}

		public function setModel() {
			require_once 'app/models/database.php';
			$this->model = new database();
		}
	}

?>