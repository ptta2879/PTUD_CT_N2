<?php
  include_once 'header_admin.php';
  if($_SESSION['phanquyen']==2)
  {

    echo'<script type="text/javascript">alert("Bạn không có quyền thực hiện chức năng này");window.location="admin"</script>';
    
  }
?>

<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí sản phẩm</h1>
       
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <a class="btn btn-secondary btn-sm mb-4 " href="quanlisanpham/themsanpham" role="button">Thêm sản phẩm mới</a>
      <!-- <h2>Section title</h2> -->
      <div class="table-responsive">
      <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Hình</th>
              <th scope="col">Tên</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Giá</th>
              <th scope="col">Sửa</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>

          <tbody>
            <?php
              $stt =0;
              $link = LINK;
              // print_r($this->soluong);
              $soluong = $this->soluong;
              foreach ($this->sanpham as $value) {
                $stt+=1;
                $id = $value['idkho'];
                // print_r($soluong[$id][0]['soluong']);
                echo '<form method="post">';
                echo '<input type="hidden" name="idsp" value="'.$value['id'].'">';
                echo '<tr><th class="align-middle" scope="row">'.$stt.'</th>';
                echo '<td class="align-middle"><img src="'.$link.$value['id'].'_hinhdaidien_.png" width="70px"></td>';
                echo '<td class="align-middle">'.$value['tensp'].'</td>';
                echo '<td class="align-middle">'.$soluong[$id][0]['soluong'].'</td>';
                echo '<td class="align-middle">'.$value['gia'].'</td>';
                echo '<td class="align-middle">
                      <a href="quanlisanpham/suasanpham?idsp='.$value['id'].'" class="btn btn-sm btn-secondary">Sửa</a>
                    </td>
                    <td class="align-middle">
                      <button type="submit" name="xoa" class="btn btn-sm btn-secondary">Xóa</button>
                    </td>
                  </tr></form>';
              }


            ?>
            
           
          </tbody>
        </table>
    </div>
    </main>
  </div>
</div>

<?php
  include_once 'footer_admin.php';
?>