<?php
class trangchu extends Controller {

	public function index() {
	
		$slide=$this->model->loaddulieu('SELECT * FROM tintuc ORDER BY vitri asc');
		$danhmuc=$this->model->loaddulieu('SELECT n.id,tennhasanxuat,idchungloai FROM nhasanxuat n JOIN chungloai c on n.idchungloai=c.id WHERE c.trangthai=1');
		$sanphammoi=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 ORDER BY s.id DESC ");
		$sanphambanchay=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 ORDER BY s.soluongban DESC");
		if(isset($_REQUEST['hang']))
		{
			$hang=$_REQUEST['hang'];
		}
		else
		{
			$hang=0;
		}
		if(isset($_REQUEST['trang']))
			{
				$page=$_REQUEST['trang'];
			}
			else
			{
				$page=1;
			}
			$start_from=($page-1)*8;
			//Load tat ca san pham
			if($hang!=0)
			{
				$tatcasp=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 and s.idnhasx=$hang  ORDER BY s.gia ASC limit $start_from,8");
			}
			else
			{
				$tatcasp=$this->model->loaddulieu("SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1  ORDER BY s.gia ASC limit $start_from,8");
			}
			//tinh tong cac san pham 
			if($hang!=0)
			{
				$tongsanpham=$this->model->loaddulieu(" SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 and s.idnhasx=$hang");
			}
			else
			{
				$tongsanpham=$this->model->loaddulieu(" SELECT s.id,s.idchungloai,s.idnhasx,s.tensp,s.gia,s.soluongban,s.mota FROM sanpham s JOIN chungloai c on s.idchungloai=c.id WHERE c.trangthai=1 ");
			}
			//Tong so trang 
			$total_records=count($tongsanpham);
			$total_pages=ceil($total_records/8);
		$this->view->data = ["slide" => $slide, "danhmuc" => $danhmuc, "sanphammoi" => $sanphammoi,"sanphambanchay" => $sanphambanchay,"tatcasp" => $tatcasp,"totalpages"=>$total_pages,"hang"=>$hang];
		// $this->view->data = ["slide" => $slide, "danhmuc" => $danhmuc, "sanphammoi" => $sanphammoi,"sanphambanchay" => $sanphambanchay];
		$this->view->render('index', 'trangchu_v');
		// $this->view->data = 'dang o trong page';
		// $this->view->render('index','trangchu');

	}

	public function test($params) {
		print_r($params);
	}

}

?>