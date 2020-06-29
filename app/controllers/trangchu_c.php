<?php
class trangchu extends Controller {

	public function index() {
	
		$slide=$this->model->loaddulieu('SELECT * FROM tintuc ORDER BY vitri asc');
		$danhmuc=$this->model->loaddulieu('SELECT n.id,tennhasanxuat,idchungloai FROM nhasanxuat n JOIN chungloai c on n.idchungloai=c.id WHERE c.trangthai=1');
		$sanphammoi=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 ORDER BY s.id DESC ");
		$sanphambanchay=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 ORDER BY s.soluongban DESC");
		$tatcasp=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1");
		$this->view->data = ["slide" => $slide, "danhmuc" => $danhmuc, "sanphammoi" => $sanphammoi,"sanphambanchay" => $sanphambanchay,"tatcasp" => $tatcasp];
		$this->view->render('index', 'trangchu_v');
		// $this->view->data = 'dang o trong page';
		// $this->view->render('index','trangchu');

	}

	public function test($params) {
		print_r($params);
	}

}

?>