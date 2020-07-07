<?php
  include_once 'header.php';
?>

<main>


<div class="container sessionrieng">
  <div class="row">
    <div class="col-12">
      <h1 class="h2 font-weight-normal text-dark mb-3">Giỏ hàng</h1>
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
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#thanhtoan">Thanh Toán</button>
      </div>  
    </div>
  </div>
<div class="modal fade" id="thanhtoan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Đơn Hàng</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Họ Và Tên Đệm</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="hovatendem" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tên</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="hovatendem" class="form-control" id="recipient-name">
                </div><div class="form-group">
                  <label for="recipient-name" class="col-form-label">Giá</label>
                  <p class="text-danger h5">200000 VND</p>
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Số điện thoại</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="sdtnhasx" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Địa chỉ</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="diachinhasx" class="form-control" id="recipient-name">
                </div>
                  <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Thanh toán khi nhận hàng
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Thanh toán online
                  </label><div class="form-group">
                  <label for="recipient-name" class="col-form-label">Số tài khoản ngân hàng</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="diachinhasx" class="form-control" id="recipient-name">
                  <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tên chủ thẻ</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="diachinhasx" class="form-control" id="recipient-name">
                </div>
                </div>
                
               
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Đóng</button>
              <button type="submit" value="nutthem" name="nutthemnhasx" class="btn btn-success btn-sm">Xác nhận</button>
            </div>
                
                
                
              
            </div>
</div>
</main>


<?php
  include_once 'footer.php';
?>
