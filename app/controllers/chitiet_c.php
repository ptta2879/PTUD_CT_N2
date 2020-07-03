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
			}
			else
			{
				echo '<script type="text/javascript">window.location="trangchu"</script>';
			}
			$this->view->data=["soluongsp" => $soluongsp];
		$this->view->render('productDetail','chitiet_v');
			
		}
		
		
	}
?>