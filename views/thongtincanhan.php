<?php
  include_once 'header.php';
?>


<main>

<div class="container shadow-sm p-3 mb-5 mt-5 bg-white rounded">
  <div class="row mb-5 mr-2">
    <div class="col-12">
      <h1 class="h3 text-secondary ">Thông tin cá nhân</h1>
    </div>
  </div>
  <div class="row m-4">
    <div class="col-3">
      <p class="text-secondary">Họ và tên: </p>
      <p class="text-secondary">Username: </p>
      <p class="text-secondary">Giới tính: </p>
      <p class="text-secondary">Ngày sinh: </p>
      <p class="text-secondary">Email: </p>
      <p class="text-secondary">Số điện thoại: </p>
      <p class="text-secondary">Địa chỉ: </p>
    </div>
    <div class="col-3">
      <p class="text-secondary">Phạm Ân Thành Quang</p>
      <p class="text-secondary">PaTq</p>
      <p class="text-secondary">Nam</p>
      <p class="text-secondary">1/1/1000</p>
      <p class="text-secondary">qwertyui@gmail.com</p>
      <p class="text-secondary">0123456789</p>
      <p class="text-secondary">Thanh pho ho chi minh</p>
    </div>
  </div>

  <div class="row m-4">
    <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#exampleModal">Sửa thông tin cá nhân</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Nhâp thông tin cần sửa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Họ và tên</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="input-group mb-3">
                  <select class="custom-select" id="inputGroupSelect02">
                    <option selected>Kiểu dữ liệu</option>
                    <option value="1">Int</option>
                    <option value="2">Nvarchar</option>
                    <option value="3">Float</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary btn-sm" type="button">Chọn</button>
                  </div>
                  <!-- <label for="message-text" class="col-form-label">Message:</label> -->
                  <!-- <textarea class="form-control" id="message-text"></textarea> -->
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success btn-sm">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

</main>



<?php
  include_once 'footer.php';
?>
