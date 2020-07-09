<?php /**
 * 
 */
class quanlibaiviet extends Controller
{
	
	function index()
	{
		$tintuc=$this->model->loaddulieu("SELECT * FROM tintuc order by id asc ");
		$baiviet=$this->model->loaddulieu("SELECT * FROM baiviet ");
		if (isset($_REQUEST['xoa'])) {
			$id=$_REQUEST['xoa'];
			$thongbao=$this->model->themxoasuakhonglastid("DELETE FROM baiviet where id=$id limit 1");
			if ($thongbao!=0) {
				unlink("./app/views/assets/img/baiviet/baiviet-".$id.".jpg");
				
				echo'<script type="text/javascript">alert("Xóa bài viết mới thành công")</script>';
					echo '<META http-equiv="refresh" content="0;URL=quanlibaiviet" charset="utf8">';
			}
			else
			{
				$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				 	Xóa bài viết không thành công.
				</div>';
			}
		}
		if(isset($_REQUEST['capnhatvitri']))
		{
			$idtintuc=$_REQUEST['matintuc'];
			$vitri=$_REQUEST['vitri'];
			$tmp_nametintuc=$_FILES['hinhthaidoi']['tmp_name'];
			if($vitri>0){
				$thongbaocapnhat=$this->model->themxoasuakhonglastid("UPDATE tintuc SET vitri=$vitri where id=$idtintuc");
			}
			elseif ($vitri==0) {
				$thongbaocapnhat=$this->model->themxoasuakhonglastid("UPDATE tintuc SET vitri=NULL where id=$idtintuc");
			}
				
				if ($thongbaocapnhat!=0) {
					if(isset($tmp_nametintuc)){
						move_uploaded_file($tmp_nametintuc,"./app/views/assets/img/tintuc/Tintuc".$idtintuc.".png");
					}
					echo'<script type="text/javascript">swal("Thay đổi vị trí thành công")</script>';
					echo '<META http-equiv="refresh" content="0;URL=quanlibaiviet?selectbaiviet=2" charset="utf8">';
				}
				else
				{
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				  Bạn nhập trùng vị trí với tin tức khác
				</div>';
				}
			
			
		}

		$this->view->data=['baiviet'=>$baiviet,'tintuc'=>$tintuc];
		$this->view->render('quanli_baiviet','quanlibaiviet_v');
	}
} ?>
