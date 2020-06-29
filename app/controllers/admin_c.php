<?php

	class admin extends Controller
	{
		
		public function index(){
			if(isset($_SESSION['phanquyen']) &&  $_SESSION['phanquyen'] == 1){
				$this->view->render('admin');
			}
			else {
				$this->view->render('trangchu');
			}

			
		}
	}

?>