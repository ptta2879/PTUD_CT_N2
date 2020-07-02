<?php
	class quanlihangtonkho extends Controller {
		 function index()
		{
			if(isset($_REQUEST['selectkhohang']))
			{
				$selectkhohang=$_REQUEST['selectkhohang'];
			}
			else
			{
				$selectkhohang=2;
			}
			switch ($selectkhohang) {
				case 1:
					{
						$hienthikhohang=$this->model->loaddulieu("SELECT * FROM khohang");
						$hienthinhapkho=$this->model->loaddulieu("SELECT * FROM nhapkho");
						break;
					}
				case 2:
				{
					$hienthikhohang=$this->model->loaddulieu("SELECT k.id,s.tensp,k.soluong FROM khohang k JOIN sanpham s on k.id=s.idkho JOIN chungloai c on c.id=s.idchungloai WHERE c.trangthai= 1");
					$hienthinhapkho=$this->model->loaddulieu("SELECT s.tensp,n.soluong,n.thoigian,n.ngaynhap FROM nhapkho n JOIN khohang k ON n.idkho=k.id JOIN sanpham s on k.id=s.idkho JOIN chungloai c on c.id=s.idchungloai WHERE c.trangthai= 1");
					break;
				}
				case 3:
				{
					$hienthikhohang=$this->model->loaddulieu("SELECT k.id,s.tensp,k.soluong FROM khohang k JOIN sanpham s on k.id=s.idkho JOIN chungloai c on c.id=s.idchungloai WHERE c.trangthai= 0");
					$hienthinhapkho=$this->model->loaddulieu("SELECT s.tensp,n.soluong,n.thoigian,n.ngaynhap FROM nhapkho n JOIN khohang k ON n.idkho=k.id JOIN sanpham s on k.id=s.idkho JOIN chungloai c on c.id=s.idchungloai WHERE c.trangthai= 0");
					break;
				}
			}
			if(isset($_REQUEST['suathongtin']))
			{
				$id=$_REQUEST['makho'];
				$thoigian=$_REQUEST['thoigian'];
				$ngaynhap=$_REQUEST['ngaynhap'];
				$soluong=$_REQUEST['soluong'];
				#insert vao bang nhap kho
				
				
				$thongbao=$this->model->themxoasua("INSERT INTO nhapkho(idkho,thoigian,ngaynhap,soluong) VALUES($id,'$thoigian','$ngaynhap',$soluong)");
				
				
				
				#update so luong trong kho
				if($thongbao==1)
				{
					$thongbao1=$this->model->themxoasua("UPDATE khohang SET soluong = soluong +$soluong WHERE id=$id");
					if($thongbao1==1)
					{
						echo '<script type="text/javascript">alert("Nhập kho thành công")</script>';
						echo '<META http-equiv="refresh" content="0;URL=quanlihangtonkho" charset="utf8">';

					}
					else{
						echo '<script type="text/javascript">alert("Nhập kho không thành công")</script>';
					}
				}
				else{
					if (empty($ngaynhap)) {
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa chọn ngày nhập kho
				</div>';
				}
				elseif (empty($ngaynhap)&&empty($thoigian)) {
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa chọn ngày và thơi gian nhập kho
				</div>';
				}
					elseif(empty($thoigian))
				{
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa chọn thời gian nhập kho
				</div>';
				}
				elseif (empty($soluong)) {
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa nhập số lượng nhập kho
				</div>';
				}
				elseif (empty($id)) {
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa nhập mã kho
				</div>';
				}
				

				}
				
			}
			$this->view->data=["hienthikhohang"=>$hienthikhohang,"hienthinhapkho"=>$hienthinhapkho];
			$this->view->render('quanli_hangtonkho','quanlihangtonkho_v');
		}
	}

?>
