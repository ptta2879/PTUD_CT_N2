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
        <h1 class="h2">Quản lí nhà cung cấp</h1>
        <form method="post">
          <div class="input-group">
  <select name="selectnhasanxuat" class="custom-select" id="inputGroupSelect04">
    <option value="1">Tất cả nhà sản xuất</option>
    <option value="2">Nhà sản xuất thuộc chủng loại đang hiện</option>
    <option value="3">Nhà sản xuất thuộc chủng loại đang ẩn</option>
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary"   type="submit">Lọc</button>
  </div>
</div>
        </form>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#exampleModal">Thêm nhà cung cấp mới</button>
          <p class="font-weight-bold"><?php if(isset($this->message)){echo $this->message;} ?></p>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Thêm nhà cung cấp</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tên nhà cung cấp</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="tennhasx" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Số điện thoại</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="sdtnhasx" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Địa chỉ</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <input type="text" name="diachinhasx" class="form-control" id="recipient-name">
                </div>
                <div class="form-group">
            <label for="sm_name" class="col-form-label">Chọn hình đăng lên</label><span class="ml-2 text-danger">* Bắt Buộc</span>
            <br>
            <input type="file"  id="sm_name" name="hinhnhasx_them">
            
          </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Chủng loại</label><span class="ml-2 text-danger">* Bắt Buộc</span>
                  <select name="chungloainhasx" class="custom-select" id="inputGroupSelect04">
                  <?php 
                    $this->page->chungloai();
                  ?>
                  </select>
                </div>
                
                
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Đóng</button>
              <button type="submit" value="nutthem" name="nutthemnhasx" class="btn btn-success btn-sm">Xác nhận</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- <h2>Section title</h2> -->
      <div class="table-responsive">
      <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên</th> 
              <th scope="col">Hình</th>           
              <th scope="col">SĐT</th>
              <th scope="col">Chủng loại</th>
              <th scope="col">Địa chỉ</th>
              <th scope="col">Sửa</th>
              
            </tr>
          </thead>
          <tbody>
            <?php $this->page->nhasanxuat() ?>
          </tbody>
        </table>
    </div>
    </main>
  </div>
</div>

<div class="modal fade" id="nhasanxuat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="suathongtin" method="post" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="phone" class="col-form-label">Mã Nhà Sản Xuất</label>
            <span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="number" class="form-control" id="manhasanxuat" name="manhasanxuat">
          </div>
          <div class="form-group">
            <label for="sm_name" class="col-form-label">Số điện thoại</label><span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="tel"  class="form-control" id="sm_name" name="sdt">
            
          </div>
          <div class="form-group">
            <label for="sm_name" class="col-form-label">Chọn hình đăng lên</label><span class="ml-2 text-danger">* Bắt Buộc</span>
            <br>
            <input type="file"  id="sm_name" name="hinhnhasx_sua">
            
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Chủng Loại</label><span class="ml-2 text-danger">* Bắt Buộc</span>
            <select name="select" class="custom-select" id="inputGroupSelect04">
                  <?php 
                    $this->page->chungloai();
                  ?>
                  </select>
            
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Địa Chỉ</label>
            <span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="text" class="form-control"  name="diachi">
            
          </div>
          
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Hủy</button>
        <button type="submit" name="nutsua" class="btn btn-success btn-sm">Xác nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
  include_once 'footer_admin.php';
?>
<script type="text/javascript">
  $('#nhasanxuat').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('sx') // Extract info from data-* attributes
  var recipient1 = button.data('tensx')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Sửa nhà sản xuất ' + recipient1)
  modal.find('.modal-body #manhasanxuat').val(recipient)
})</script>