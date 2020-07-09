<?php
  include_once 'header.php';
?>

<main>


<div class="container sessionrieng">
  <div class="row">
    <div class="col-12">
      <h1 class="h2 font-weight-normal text-dark mb-3">Giỏ hàng</h1>
      <!-- <form method="post"> -->
        <button type="submit" name="hangdamua" class="btn btn-outline-primary m-1" data-toggle="modal" data-target="#exampleModalCenter">Hàng đã mua</button>
      <!-- </form> -->
    </div>
    <div class="col-12">
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Hình</th>
              <th scope="col">Tên</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng</th>
              <th scope="col">Cập nhật</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $stt = 0;
              $tong = 0;
              foreach ($this->data as $value) {
                $stt+=1;
                $tong += $value['soluong']*$value['gia'];

                echo '<tr><th scope="row">'.$stt.'</th>';
                echo '<td>English</td>';
                echo '<td>'.$value['tensp'].'</td>';
                echo '<td>
                      <select class="custom-select" id="inlineFormCustomSelectPref">
                      <option selected>'.$value['soluong'].'</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      </select>
                      </td>';
                echo '<td>'.$value['soluong']*$value['gia'].'</td>';
                echo '<td>
                      <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
                    </td>
                    <td>
                      <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
                    </td>
                    </tr>';
            }
             ?>
            <!-- <tr>

              <th scope="row">1</th>
              <td>England</td>
              <td>English</td>
              <td>
                <select class="custom-select" id="inlineFormCustomSelectPref">
                <option selected>1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              </td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr> -->
           
            <!-- <tr>
              <th scope="row">3</th>
              <td>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3"></label>
                </div>              
              </td>
              <td>Germany</td>
              <td>German</td>
              <td>
                <select class="custom-select" id="inlineFormCustomSelectPref">
                <option selected>1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              </td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr> -->
          </tbody>
        </table>
    </div>
  </div>

  <div class="row">
    <div class="col-6 ml-auto mt-5 mb-5">
      <h1 class="h4 font-weight-normal text-dark">Tổng tiền số hàng trong giỏ</h1>
      <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">Tổng tiền</th>
          <td><?php echo $tong ?></td>
        </tr>
      <!--   <tr>
          <th scope="row">VAT</th>
          <td>10</td>
          
        </tr>
        <tr>
          <th scope="row">Tổng tiền</th>
          <td>110</td>
        </tr> -->
      </tbody>
      </table>
      <div class="d-flex flex-row-reverse">
      <!-- <button type="button" class="btn btn-secondary btn-sm mb-4 open-modal" data-id="<?php echo $_SESSION['id'] ?>" data-toggle="modal" data-target="#thanhtoan">Thanh Toán</button> -->
      <a href="thanhtoan" class="btn btn-secondary mb-4 open-modal">Thanh toán</a>
      </div>  
    </div>
  </div>

</div>
</main>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Hàng đã mua</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table table-sm">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    
                    $tong = 0;
                    $ct_donhang = $this->ct_donhang;
                    // print_r($ct_donhang); die();
                    foreach ($this->donhang as $value) {
                      
                      echo '<tr><td class="table-success" colspan="4">Đơn hàng có mã ';
                      echo $value['id'].'. Trạng thái giao hàng: '.$value['trangthaigiaohang'];
                      echo '</td></tr>';
                      $stt = 0;
                      foreach ($ct_donhang[$value['id']] as $key) {
                        $stt+= 1;
                        echo '<tr><td>'.$stt.'</td>';
                        echo '<td>'.$key['tensp'].'</td>';
                        echo '<td>'.$key['soluong'].'</td>';
                        echo '<td>'.$key['gia'].'</td></tr>';
                        
                        // echo $key['tensp'].'so luong'.$key['soluong'].'gia'.$key['gia'].'<br>';
                      }
                      
                    }
                      
              
             
                   ?>
                 
                </tbody>
              </table>
            </div>
      </div>
     
    </div>
  </div>
</div>

<!-- <?php print_r($this->donhang); ?> -->

<?php
  include_once 'footer.php';
?>
<script>

$(document).on("click", ".open-modal", function () {
     var myBookId = $(this).data('id');
     $(".modal-body #iduser").val( myBookId );
     // As pointed out in comments, 
     // it is unnecessary to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

</script>