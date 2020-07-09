<?php
	class quanlitaikhoannhanvien extends Controller {
		public function index(){
			if(isset($_REQUEST['themtaikhoan']))
			{
				$user=$_REQUEST['username'];
				$password=md5(1);
				$phanquyen=1;
				$thongbao=$this->model->themxoasuakhonglastid("INSERT INTO taikhoan(username,password,phanquyen) VALUES ('$user','$password',$phanquyen)");
				if ($thongbao!=0) {
					echo'<script type="text/javascript">alert("Đã thêm một tài khoản mới")</script>';
					echo '<META http-equiv="refresh" content="0;URL=quanlitaikhoannhanvien" charset="utf8">';
				}
				else
					{
						$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				 	Tài khoản này đã tồn tại 
				</div>';
					}
			}
			if(isset($_REQUEST['xoatk']))
			{
				$idxoa=$_REQUEST['xoatk'];
				$thongbaoxoa=$this->model->themxoasuakhonglastid("DELETE FROM taikhoan where id=$idxoa limit 1");
				if ($thongbaoxoa!=0) {
					echo'<script type="text/javascript">alert("Đã xóa 1 tài khoản")</script>';
					echo '<META http-equiv="refresh" content="0;URL=quanlitaikhoannhanvien" charset="utf8">';
				}
				else
				{
					$this->view->message = 
				'<div class="alert alert-danger" role="alert">
				 	Gặp lỗi khi xóa
				</div>';
				}
			}
			$taikhoanquantri=$this->model->loaddulieu("SELECT id,username,hotendem,ten,sdt,diachi FROM taikhoan where phanquyen=1");
			$this->view->data=['taikhoanquantri'=>$taikhoanquantri];
			$this->view->render('quanli_taikhoannhanvien','quanlitaikhoannhanvien_v');
		}
	}

?>
