<?php /**
 * 
 */
class thembaiviet extends Controller
{
	
	function index()
	{
		if (isset($_REQUEST['thembaiviet'])) 
		{
			$tieude=$_REQUEST['tieude'];
			$noidung=$_REQUEST['noidung'];
			$tmp_nametintuc=$_FILES['hinhtintuc']['tmp_name'];
			$tmp_namedaidien=$_FILES['hinhdaidien']['tmp_name'];
			$typetintuc=$_FILES['hinhtintuc']['type'];
			$typedaidien=$_FILES['hinhdaidien']['type'];
			$id=$_SESSION['id'];
			// echo $tieude,$noidung,$vitri,$tmp_namedaidien,$tmp_nametintuc,$typedaidien,$typetintuc,$id;
			$thongbao=$this->model->themxoasualastid("INSERT INTO baiviet(idtk,tieude,noidung) VALUES($id,'$tieude','$noidung')");
			if($thongbao!=0)
			{
				if ($typedaidien=="image/png" or $typedaidien=="image/jpg" or $typedaidien=="image/jpeg" or $typedaidien=="image/JPEG" or $typedaidien="image/PNG" or $typetintuc=="image/png" or $typetintuc=="image/jpg" or $typetintuc=="image/jpeg" or $typetintuc=="image/JPEG" or $typetintuc="image/PNG") 
				{
					$thongbaodaidien=move_uploaded_file($tmp_namedaidien,"./app/views/assets/img/baiviet/baiviet-".$thongbao.".jpg");
					if ($thongbaodaidien==1) 
					{
						$thongbaotintuc=$this->model->themxoasualastid("INSERT INTO tintuc(idbaiviet,ten) VALUES($thongbao,'$tieude')");
						if ($thongbaotintuc!=0) 
						{
							$thongbaohinhtintuc=move_uploaded_file($tmp_nametintuc,"./app/views/assets/img/tintuc/Tintuc".$thongbaotintuc.".png");
								echo'<script type="text/javascript">alert("Thêm bài viết mới thành công")</script>';
							echo '<META http-equiv="refresh" content="0;URL=quanlibaiviet" charset="utf8">';

						}
						else
						{
							$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Không thêm được tin tức
				</div>';
						}
					}
					else
					{
						$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Không tải hình đại diện lên được.
				</div>';
					}
				}
				else
				{
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn phải chọn hình.
				</div>';
				}
			}
			else
			{
				$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Thêm bài viết không thành công
				</div>';
			}	
		}
		$this->view->render('thembaiviet');
	}
} ?>