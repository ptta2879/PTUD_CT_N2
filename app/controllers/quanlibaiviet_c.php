<?php

	/**
	 * 
	 */
	class quanlibaiviet extends Controller
	{
		
		public function index()
			{
			$this->view->render('thembaiviet');
		}

		public function thembaiviet() {

			$this->view->render('thembaiviet');
		}
	
		
	}
	

?>