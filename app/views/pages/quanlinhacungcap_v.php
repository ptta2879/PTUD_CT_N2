<?php /**
 * 
 */
class quanlinhacungcap_v
{
	
	function chungloai()
	{
		$dulieu=$this->data['chungloai'];
		for ($i=0; $i <count($dulieu) ; $i++) { 
			$rows=$dulieu[$i];
			echo '<option value="'.$rows['id'].'">'.$rows['ten'].'</option>';
		}
	}
	function nhasanxuat()
	{
		$dulieu=$this->data['nhasanxuat'];
		$stt=1;
		for ($i=0; $i <count($dulieu) ; $i++) { 
			$rows=$dulieu[$i];
			echo '<tr>
              <th scope="row">'.$stt.'</th>
              <td>'.$rows['tennhasanxuat'].'</td>
              <td><img src="'.DIR_APP.'views/assets/img/nhasanxuat/nhasanxuat-'.$rows['id'].'.jpg" width="200" height="40"</td>
              <td>'.$rows['sdt'].'</td>
              <td>'.$rows['ten'].'</td>
              <td>'.$rows['diachi'].'</td>
              <td>
                <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#nhasanxuat" data-sx="'.$rows['id'].'" data-tensx="'.$rows['tennhasanxuat'].'">Sửa</button>
              </td>
              
            </tr>';
            $stt++;
		}
		
	}
} ?>