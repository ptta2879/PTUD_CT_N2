<?php /**
 * 
 */
class quanlitaikhoannhanvien_v
{
	
	function taikhoan()
	{
		$dulieu=$this->data['taikhoanquantri'];
		$stt=1;
		for ($i=0; $i < count($dulieu) ; $i++) { 
			$row=$dulieu[$i];
			echo '<tr>
              <th scope="row">'.$stt.'</th>
              <td class="align-self-center">'.$row['username'].'</td>
              <td>'.$row['hotendem'].'</td>
              <td>'.$row['ten'].'</td>
              <td>'.$row['sdt'].'</td>
              <td>'.$row['diachi'].'</td>
              <td>
                <a href="?xoatk='.$row['id'].'" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>';
              $stt++;
		}
	}
} ?>