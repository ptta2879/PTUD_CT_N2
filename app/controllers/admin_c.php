<?php

	class admin extends Controller
	{
		
		public function index(){
			if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi'])&&$_SESSION['phanquyen']>=1){
				// print_r($this->active)
				$this->view->render('admin');
			}
			else {
				$this->view->render('admin');
			}

			
		}
	}

?>