<?php
  include_once 'header_admin.php';
?>

<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-warehouse mr-3 "></i>Quản lí hàng tồn kho</h1>
        <form method="post">
          <div class="input-group">
  <select name="selectkhohang" class="custom-select" id="inputGroupSelect04">
    <option value="1">Tất cả sản phẩm trong kho</option>
    <option value="2">Sản phẩm thuộc chủng loại đang hiện</option>
    <option value="3">Sản phẩm thuộc chủng loại đang ẩn</option>
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary"   type="submit">Lọc</button>
  </div>
</div>
        </form>

         
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
     
      <!-- <h2>Section title</h2> -->
      <div class="table-responsive">
        <h5>Chọn giao diện</h5>
        <p class="font-weight-bold"><?php if(isset($this->message)){echo $this->message;} ?></p>
        <form method="post">
          <div class="input-group">
  <select name="selectgiaodien" class="custom-select" id="inputGroupSelect04">
    <option value="1">Số lượng sản phầm còn trong kho</option>
    <option value="2">Chi tiết nhập kho</option>
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary"   type="submit">Chọn</button>
  </div>
</div>
        </form>
        <h5 class="mt-3">Số lượng sản phầm còn trong kho</h5>
      
      <?php if (isset($_REQUEST['selectgiaodien'])) {
        $selectgiaodien=$_REQUEST['selectgiaodien'];
      }
      else {
         $selectgiaodien=1;
       } 
switch ($selectgiaodien) {
          case 1:
            {
              $this->page->xuatkho();
              break;
            }
            case 2:
            {
              $this->page->nhapkho();
              break;
            }
        }
      ?>
    </div>
  </main>
  </div>
</div>



</main>
<!-- Thêm số lượng -->
<div class="modal fade" id="hangtonkho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="suathongtin" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="phone" class="col-form-label">Mã Kho:</label>
            <span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="number" class="form-control" id="makho" name="makho">
          </div>
          <div class="form-group">
            <label for="sm_name" class="col-form-label">Ngày nhập</label><span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="date"  class="form-control" id="sm_name" name="ngaynhap">
            
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Thời gian nhập</label><span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="time" class="form-control" id="name" name="thoigian">
            
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Số lượng:</label>
            <span class="ml-2 text-danger">* Bắt Buộc</span>
            <input type="number" class="form-control" id="phone" name="soluong">
            
          </div>
          
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Hủy</button>
        <button type="submit" name="suathongtin" class="btn btn-success btn-sm">Xác nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php
  include_once 'footer_admin.php';
?>
<script type="text/javascript">
  $('#hangtonkho').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('masp') // Extract info from data-* attributes
  var recipient1 = button.data('tensp')
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Nhập hàng cho sản phẩm ' + recipient1)
  modal.find('.modal-body #makho').val(recipient)
})</script>
