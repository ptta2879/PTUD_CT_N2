<?php 
/**
 * 
 */
class quanlibaiviet_v
{
	
	function hienbaiviet()
	{
		$dulieu=$this->data['baiviet'];
		$stt=1;
		echo '<tr>
            <th scope="col">STT</th>
            <th scope="col">Hình</th>
            <th scope="col">Tiêu Đề</th>
            <th scope="col">Ngày đăng</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
          </tr>
           </thead>
        <tbody >';
		for ($i=0; $i < count($dulieu); $i++)
		{ 
			$row=$dulieu[$i];
			echo'<tr>
            <th scope="row">'.$stt.'</th>
            
            <td class="w-50 h-30"><img src="'.DIR_APP.'views/assets/img/baiviet/baiviet-'.$row['id'].'.jpg" class="w-50 h-30" ></td>
            <td>'.$row['tieude'].'</td>
            
            <td>
              <p class="text-secondary">'.$row['ngaydang'].'</p>   
             </td>
            <td>
              <a href="suabaiviet?baiviet='.$row['id'].'" class="btn btn-sm btn-secondary ">Sửa</a>
            </td>
            <td>
              <a href="?xoa='.$row['id'].'" onclick="return confirm(\'Bạn muốn xóa bài viết này\');" class="btn btn-sm btn-secondary ">Xóa</a>
            </td>
          </tr>';
          $stt++;
		}
		echo '</tbody>
      </table>';
	}
	function tintuc()
	{
		$dulieu=$this->data['tintuc'];
		$stt=1;
		echo '<tr>
            <th scope="col">STT</th>
            <th scope="col">Hình</th>
            <th scope="col">ID Bài viết</th>
            <th scope="col">Vị trí</th>
            <th scope="col">Cập nhật</th>
            <th scope="col">Xóa</th>
          </tr>
           </thead>
        <tbody >';
		for ($i=0; $i < count($dulieu); $i++)
		{ 
			$row=$dulieu[$i];
			echo'<tr>
            <th scope="row">'.$stt.'</th>
            
            <td class="w-50 h-30"><img src="'.DIR_APP.'views/assets/img/tintuc/Tintuc'.$row['id'].'.png" class="w-50 h-30" ></td>
            <td>'.$row['idbaiviet'].'</td>
            
            <td>
              '.$row['vitri'].'
             </td>
            <td>
              <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-id="'.$row['id'].'">Thay đổi vị trí</button>
            </td>
            <td>
              <a href="?selectbaiviet=2&oatintuc='.$row['id'].'" class="btn btn-sm btn-secondary ">Xóa</a>
            </td>
          </tr>';
          $stt++;
		}
		echo '</tbody>
      </table>';
	}
	
}
 ?>