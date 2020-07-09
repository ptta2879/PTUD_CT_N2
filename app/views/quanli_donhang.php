<?php
  include_once 'header_admin.php';
?>


<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí đơn hàng</h1>
        
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Section title</h2> -->
      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr >
              <th scope="col">STT</th>
              <th scope="col">Họ và tên đệm</th>
              <th scope="col">Tên</th>
              <th scope="col">Số điện thoại</th>
              <th scope="col">Mô tả</th>
              <th scope="col">Tổng tiền</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Trạng thái giao hàng</th>
              <th scope="col">Cập nhật</th>
            </tr>
          </thead>
          <tbody >

            
            <?php 
                // print_r($this->ct_donhang);
                // print_r($this->donhang);
                $trangthaigiaohang = ['Chưa giao','Đang giao','Đã giao'];
                $stt = 0;
                $ct_donhang = $this->ct_donhang;
                // print_r($ct_donhang); die();
                
                foreach ($this->donhang as $value) {
                  $checked = '';
                   if($value['trangthai'] == 1){
                    $checked = 'checked';
                   }

                  $stt+=1;
                  echo '<form method="post">';
                  echo'<tr><th  class="align-middle" scope="row">'.$stt.'</th>';
                  echo'<td class="align-middle">'.$value['hovatendem'].'</td>';
                  echo'<td class="align-middle">'.$value['ten'].'</td>';
                  echo'<td class="align-middle">'.$value['sdt'].'</td>';

                  $noidung = '';
                  foreach ($ct_donhang[$value['id']] as $key) {
                    $noidung .= $key['tensp'].', Số lượng: '.$key['soluong'].', Giá: '.$key['gia'].'. ';
                    
                  }
                  echo'<td class="align-middle" style="width: 20%;">'.$noidung.'</td>';
                  echo'<td class="align-middle">'.$value['gia'].'</td>';
                  // echo'<td>'.$value['trangthai'].'</td>';
                  echo '<td class="align-middle">
                        <div class="custom-control custom-switch">
                          <input type="hidden" name="id" value="'.$value['id'].'">
                          <input type="hidden" name="check_list" value="0">
                          <input type="checkbox" '.$checked.' class="custom-control-input" id="'.$value['id'].'" value="1" name="check_list">
                          <label class="custom-control-label" for="'.$value['id'].'">Xác nhận</label>
                        </div>
                      </td>';
                  // echo'<td>'.$value['trangthaigiaohang'].'</td>';
                  echo '<td class="align-middle"><select style="width: 60%;" class="custom-select" id="inputGroupSelect03" name="trangthaigiaohang">';
                  // if($checked) {
                  foreach ($trangthaigiaohang as $ttgh) {
                    if($ttgh == $value['trangthaigiaohang']) {
                      echo '<option value="'.$value['trangthaigiaohang'].'" selected>'.$value['trangthaigiaohang'].'</option>';
                    } 
                    else {
                      echo '<option value="'.$ttgh.'" >'.$ttgh.'</option>';
                    }
                  }
                  // }
                  echo '</select></td>';



                  echo '<td class="align-middle"><button type="submit" name="capnhat" class="btn btn-sm btn-secondary">Cập nhật</button></td></tr>';
                  echo '</form>';
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
