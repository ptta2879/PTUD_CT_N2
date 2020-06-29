<?php
	class quanlisanpham extends Controller {

		public function index(){
			$this->view->render('quanli_sanpham');
		}

		public function themsanpham(){
			$this->view->render('themsp');
		}

	}


?>