<?php /**
 * 
 */
class quanlihangtonkho_v
{
	
	function xuatkho()
	{
		$dulieu=$this->data["hienthikhohang"];
		$stt=1;
		echo '<table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên sản phẩm</th>             
              <th scope="col">Số lượng</th>
              <th scope="col">Nhập Kho</th> 
              
            </tr>
          </thead>
          <tbody>
           
            <tr>';
		for($i=0;$i<count($dulieu);$i++)
			{
				$rows=$dulieu[$i];
				echo '<th scope="row">'.$stt.'</th>
              <td>'.$rows['tensp'].'</td>
              <td>'.$rows['soluong'].'</td>
              <td>
                <button type="button" class="btn btn-sm btn-secondary " data-toggle="modal" data-target="#hangtonkho" data-masp="'.$rows['id'].'" data-tensp="'.$rows['tensp'].'"">Nhập Kho</button>
              </td>
              
              </tr>';
              $stt++;
			}
		echo '  </tr>
          </tbody>
        </table>';
	}
	function nhapkho()
	{
		$dulieu=$this->data["hienthinhapkho"];
		$stt=1;
		echo '<table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên sản phẩm</th>
                         
              <th scope="col">Số lượng</th>
              <th scope="col">Thời gian</th> 
              <th scope="col">Ngày Nhập</th> 
            </tr>
          </thead>
          <tbody>
           
            <tr>';
		for ($i=0; $i < count($dulieu) ; $i++) { 
			$rows=$dulieu[$i];
			echo '<th scope="row">'.$stt.'</th>
              <td>'.$rows['tensp'].'</td>

              <td>'.$rows['soluong'].'</td>
              <td>
                '.$rows['thoigian'].'
              </td>
              <td>
                '.$rows['ngaynhap'].'
              </td>
              </tr>';
              $stt++;
		}
		echo '  </tr>
          </tbody>
        </table>';
	}
} ?>