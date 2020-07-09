<?php 
	/**
	 * 
	 */
	class tintuc extends Controller
	{
		
		function index()
		{
			$baiviet=$this->model->loaddulieu("SELECT bv.id,tk.hotendem,tk.ten, bv.tieude,bv.noidung,bv.ngaydang FROM baiviet bv JOIN taikhoan tk on bv.idtk=tk.id ");
			$this->view->data=['baiviet'=>$baiviet];
			$this->view->render('thenew','thenew_v');
		}
	}
 ?>
