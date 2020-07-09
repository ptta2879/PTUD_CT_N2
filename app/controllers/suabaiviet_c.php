<?php 
/**
  * 
  */
 class suabaiviet extends Controller
 {
 	
 	function index()
 	{
 		if(isset($_REQUEST['baiviet']))
 		{
 			$id=$_REQUEST['baiviet'];
 		}
 		else
 		{
 			echo '<META http-equiv="refresh" content="0;URL=quanlibaiviet" charset="utf8">';
 		}
 		$tieude=$this->model->loaddulieu("SELECT tieude FROM baiviet where id=$id");
 		$noidung=$this->model->loaddulieu("SELECT noidung FROM baiviet where id=$id");
 		$tintuc=$this->model->loaddulieu("SELECT id FROM tintuc where idbaiviet=$id");
 		//sửa thông tin 
 		if(isset($_REQUEST['suabaiviet']))
 		{
 			$tieudenew=$_REQUEST['tieudenew'];
 					$noidungnew=$_REQUEST['noidungnew'];
 					$tmp_daidiennew=$_FILES['hinhdaidiennew']['tmp_name'];
 					$tpm_tintucnew=$_FILES['hinhtintucnew']['tmp_name'];
 					$thongbao=$this->model->themxoasuakhonglastid("UPDATE baiviet SET tieude='$tieudenew',noidung='$noidungnew' where id=$id");
 					if ($thongbao==1) {
 						echo '<script type="text/javascript">alert("Sửa thành công")</script>';
 						echo '<META http-equiv="refresh" content="0;URL=suabaiviet?baiviet='.$id.'" charset="utf8">';
 					}
 					// if(isset($tmp_daidiennew))
 					// 	{
 					// 		move_uploaded_file($tmp_daidiennew,"./app/views/assets/img/baiviet/baiviet-".$id.".jpg");
 					// 	}
 					// 	if (isset($tpm_tintucnew)) {
 					// 		move_uploaded_file($tpm_tintucnew,"./app/views/assets/img/tintuc/Tintuc".$id.".png");
 					// 	}
 		}
		$this->view->data=['tieude'=>$tieude,'noidung'=>$noidung,'tintuc'=>$tintuc];	
 		$this->view->render('suabaiviet','suabaiviet_v');
 		}
 		
 	}
  ?>