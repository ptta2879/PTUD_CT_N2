<?php /**
 * 
 */
class suabaiviet_v
{
	
	function tieude()
	{
		$dulieu=$this->data['tieude'];
		for ($i=0; $i < count($dulieu); $i++) { 
			$row=$dulieu[$i];
			echo $row['tieude'];
		}
	}
	function noidung()
	{
		$dulieu=$this->data['noidung'];
		for ($i=0; $i < count($dulieu); $i++) { 
			$row=$dulieu[$i];
			echo $row['noidung'];
		}
	}
	function tintuc()
	{
		$dulieu=$this->data['tintuc'];
		for ($i=0; $i < count($dulieu); $i++) { 
				$row=$dulieu[$i];
				echo '<img src="'.DIR_APP.'views/assets/img/tintuc/Tintuc'.$row['id'].'.png" class="w-50 h-30" >';
		}
	}
} ?>