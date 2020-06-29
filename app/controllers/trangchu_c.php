<?php
class trangchu extends Controller {

	public function index() {
	
		$slide=$this->model->loaddulieu('SELECT * FROM tintuc ORDER BY vitri asc');
		$danhmuc=$this->model->loaddulieu('SELECT n.id,tennhasanxuat,idchungloai FROM nhasanxuat n JOIN chungloai c on n.idchungloai=c.id WHERE c.trangthai=1');
		$dulieu=$this->model->loaddulieu("SELECT * FROM sanpham");
		$this->view->data = ["slide" => $slide, "danhmuc" => $danhmuc, "dulieu" => $dulieu];
		$this->view->render('index', 'trangchu_v');
		// $this->view->data = 'dang o trong page';
		// $this->view->render('index','trangchu');

	}

	public function test($params) {
		print_r($params);
	}

}

?>