<?php
	class timkiem extends Controller {
		public function index() {
			if(isset($_REQUEST['nd']))
			{
				$nd=$_REQUEST['nd'];
				$timkiem=$this->model->loaddulieu("SELECT * from sanpham where tensp like '%$nd%' ");
			}
			$this->view->data=['timkiem'=>$timkiem];
			$this->view->render('timkiem','timkiem_v');
		}
	}

?>