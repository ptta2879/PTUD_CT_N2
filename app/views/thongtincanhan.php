<?php
  include_once 'header.php';
?>


<main>

<div class="container sessionrieng shadow-sm p-3 mb-5 bg-white rounded">
  <div class="row mb-5 mr-2">
    <div class="col-12">
      <h1 class="h3 text-secondary ">Thông tin cá nhân</h1>
      <?php echo isset($this->message) ? $this->message: '' ?>
    </div>
  </div>
  <div class="row m-4">
    <div class="col-3">

      <p class="text-secondary">Tên: </p>
      <p class="text-secondary">Họ và tên đệm: </p>
      <!-- <p class="text-secondary">Username: </p> -->
      <!-- <p class="text-secondary">Giới tính: </p> -->
      <!-- <p class="text-secondary">Ngày sinh: </p> -->
      <p class="text-secondary">Email: </p>
      <p class="text-secondary">Số điện thoại: </p>
      <p class="text-secondary">Địa chỉ: </p>
    </div>
    <div class="col-3">

      <p class="text-secondary"><?php echo $this->data["ten"] ?></p>
      <p class="text-secondary"><?php echo $this->data["hotendem"] ?></p>
      <p class="text-secondary"><?php echo $this->data["username"] ?></p>
      <p class="text-secondary"><?php echo $this->data["sdt"] ?></p>
      <p class="text-secondary"><?php echo $this->data["diachi"] ?></p>
    </div>
  </div>

  <div class="row m-4">
    <div class="col-2">
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#suathongtin">Sửa thông tin cá nhân</button>
    </div>
    <div class="col-2">
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#doimatkhau">Đổi mật khẩu</button>
    </div>
    
  
  </div>
</div>

</main>

<div class="modal fade" id="suathongtin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="suathongtin" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhâp thông tin cần sửa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="sm_name" class="col-form-label">Họ và tên đệm</label>
            <input type="text" class="form-control" id="sm_name" name="hotendem">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Tên</label>
            <input type="text" class="form-control" id="name" name="ten">
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Số điện thoại</label>
            <input type="number" class="form-control" id="phone" name="sdt">
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="email" name="username">
          </div>
          <div class="form-group">
            <label for="address" class="col-form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="address" name="diachi">
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="suathongtin" class="btn btn-success btn-sm">Xác nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="doimatkhau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="current_pass" class="col-form-label">Nhập mật khẩu hiện tại</label>
            <input type="password" class="form-control" id="current_pass" name="current_pass" required>
          </div>
          <div class="form-group">
            <label for="new_pass" class="col-form-label">Nhập mật khẩu mới</label>
            <input type="password" class="form-control" id="new_pass" name="new_pass" required>
          </div>
          <div class="form-group">
            <label for="confirm_pass" class="col-form-label">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="confirm_pass" name="confirm_pass" required>
          </div>
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" name="doimatkhau" class="btn btn-success btn-sm">Xác nhận</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php
  include_once 'footer.php';
?>
