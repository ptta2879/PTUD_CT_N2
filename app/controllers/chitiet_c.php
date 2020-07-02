<?php 
	/**
	 * 
	 */
	class chitiet extends Controller
	{
		
		function index()
		{
			if(isset($_REQUEST['sanpham']))
			{
				$idsp=$_REQUEST['sanpham'];
			}
			else
			{
				$idsp = 0;
			}
			if($idsp!=0)
			{
				$soluongsp = $this->model->loaddulieu("SELECT k.soluong FROM sanpham s JOIN khohang k ON s.idkho=k.id WHERE s.id=$idsp");
				$tensp = $this->model->loaddulieu("SELECT tensp FROM sanpham WHERE id = $idsp");
				$chungloai = 'dienthoai';
			}
			else
			{
				echo '<script type="text/javascript">window.location="trangchu"</script>';
			}
			$this->view->data=["idsp" => $idsp,"tensp" => $tensp[0]['tensp'], "chungloai" => $chungloai,"soluongsp" => $soluongsp[0]['soluong']];
			
			$this->view->render('productDetail','chitiet_v');
		}
	}
?>