<?php
class trangchu extends Controller {

	// public function __construct(){
	// 	// parent::__construct();
	// 	parent::__construct();
	// }

	// function banner()
	// {
	// 	// $p = new databasePDO();
	// 	// $v = new viewHome();
	// 	$slide= $this->model->loaddulieu('SELECT * FROM tintuc ORDER BY vitri asc');
	// 	$v->tintuc($slide);
	// }

	// function danhmuc()
	// {
	// 	// $p=new databasePDO();
	// 	$v=new viewHome();
	// 	$dulieu=$this->model->loaddulieu('SELECT n.id,tennhasanxuat,idchungloai FROM nhasanxuat n JOIN chungloai c on n.idchungloai=c.id WHERE c.trangthai=1');
	// 	$v->danhmuc($dulieu);
	// }
	// function sanphammoi()
	// {
	// 	// $p = new databasePDO();
	// 	$v = new viewHome();
	// 	$dulieu=$this->model->loaddulieu("SELECT * FROM sanpham");
	// }


	public function index() {
		// echo 'Day la home controller';
		// print_r($this);
		// $this->model()->themdulieusp("123",4);
		// print_r($this->view);
		// print_r($this->model);
		// $result =  $this->model->insert("sql");
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