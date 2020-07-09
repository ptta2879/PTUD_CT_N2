<?php /**
 * 
 */
class baiviet extends Controller
{
	
	function index()
	{
		if(isset($_REQUEST['baiviet']))
		{
			$idbaiviet=$_REQUEST['baiviet'];
		}
		else
		{
			echo '<script type="text/javascript">window.location="tintuc"</script>';
		}
		$baiviet=$this->model->loaddulieu("SELECT bv.id,tk.hotendem,tk.ten, bv.tieude,bv.noidung,bv.ngaydang FROM baiviet bv JOIN taikhoan tk on bv.idtk=tk.id where bv.id=$idbaiviet");
		$this->view->data=['baiviet'=>$baiviet];
		$this->view->render('baiviet','baiviet_v');
	}
} ?>