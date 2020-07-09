<?php /**
 * 
 */
class quanlinhacungcap extends Controller
{
	
	function index()
	{
		$chungloai=$this->model->loaddulieu("SELECT * FROM chungloai");
		#lay select
		if(isset($_REQUEST['selectnhasanxuat']))
		{
			$selectnhasanxuat=$_REQUEST['selectnhasanxuat'];
		}
		else
		{
			$selectnhasanxuat=1;
		}
		#dieu kien hien thi
		switch ($selectnhasanxuat) {
			case 1:	
				{
					$nhasanxuat = $this->model->loaddulieu("SELECT sx.id,sx.tennhasanxuat,sx.sdt,sx.diachi,c.ten FROM nhasanxuat sx JOIN chungloai c on sx.idchungloai=c.id");
					break;
				}			
			case 2:
				{
					$nhasanxuat=$this->model->loaddulieu("SELECT sx.id,sx.tennhasanxuat,sx.sdt,sx.diachi,c.ten FROM nhasanxuat sx JOIN chungloai c on sx.idchungloai=c.id WHERE c.trangthai=1");
					break;
				}
			case 3:
				{
					$nhasanxuat=$this->model->loaddulieu("SELECT sx.id,sx.tennhasanxuat,sx.sdt,sx.diachi,c.ten FROM nhasanxuat sx JOIN chungloai c on sx.idchungloai=c.id WHERE c.trangthai=0");
					break;
				}
		}
		#them cac nha san xuat
		if(isset($_REQUEST['nutthemnhasx']))
		{
			$nutthem=$_REQUEST['nutthemnhasx'];
		}
		else
		{
			$nutthem='';
		}
		switch ($nutthem) {
			case 'nutthem':
				{
					$tennhasx=$_REQUEST['tennhasx'];
					$sdt=$_REQUEST['sdtnhasx'];
					$diachi=$_REQUEST['diachinhasx'];
					$chungloainhasx=$_REQUEST['chungloainhasx'];
					$name=$_FILES['hinhnhasx_them']['name'];
					$tmp_name=$_FILES['hinhnhasx_them']['tmp_name'];
					$type=$_FILES['hinhnhasx_them']['type'];
					$thongbao=$this->model->themxoasualastid("INSERT INTO nhasanxuat(idchungloai,tennhasanxuat,sdt,diachi) VALUES($chungloainhasx,'$tennhasx',$sdt,'$diachi')");
					if ($thongbao!=0) 
					{
						if($type=="image/png" or $type=="image/jpg" or $type=="image/jpeg" or $type=="image/JPEG" or $type="image/PNG" )
						{
							
							$thongbaofile=move_uploaded_file($tmp_name,"./app/views/assets/img/nhasanxuat/nhasanxuat-".$thongbao.".jpg");
							if($thongbaofile==1)
							{
								echo'<script type="text/javascript">alert("Nhập nhà cung cấp mới thành công")</script>';
							echo '<META http-equiv="refresh" content="0;URL=quanlinhacungcap" charset="utf8">';
							}
							else
							{
								$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Thêm sản phẩm không thành công
				</div>';
								
						
							}

						}
						else
						{
							$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn phải chọn tệp là hình
				</div>';
						}
						
					}
					else  
					{
						if(empty($tennhasx))
						{
							$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa nhập tên nhà sản xuất
				</div>';
						}
						elseif (empty($sdt)) {
							$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa nhập số điện thoại
				</div>';
						}
						elseif (empty($diachi)) {
							$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa nhập địa chỉ
				</div>';
						}
						elseif (empty($name)) {
							$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn chưa chọn hình
				</div>';
						}

					}
				}
		}
		
		$this->view->data=['chungloai'=>$chungloai,'nhasanxuat'=>$nhasanxuat];
		$this->view->render('quanli_nhacungcap','quanlinhacungcap_v');
	}
} ?>