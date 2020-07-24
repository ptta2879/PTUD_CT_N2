<?php
 include_once 'header.php';
?>
 

<main>

  <!-- <div class="jumbotron jumbotron-fluid sessionrieng"> -->
    <div class="container sessionrieng">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4">
          <h1 class="mb-3 text-center">Tạo tài khoản mới</h1>
          <p class="lead">Đăng ký miễn phí.</p>
          <form class="mb-3" method="post">
            <div class="row">
              <div class="form-group col-12 col-sm-6">
                <label for="firstName">Họ và Tên Đệm:</label>
                <input type="text" name="hotendem" class="form-control" placeholder="Họ Và Tên Đệm" id="firstName"  required>
              </div> 
              <div class="form-group col-12 col-sm-6">
                <label for="lastName">Tên:</label>
                <input type="text" name="ten" class="form-control" placeholder="Tên"  id="lastName" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" placeholder="example@gmail.com" name="email" id="email" required>
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu:</label>
              <input type="password" class="form-control"  name="matkhau" required>
            </div>
            <div class="form-group">
              <label>SĐT:</label>
              <input type="tel" name="sdt" class="form-control" id="SDT" placeholder="Số Điện Thoại"
               required>
            </div>
            <div class="form-group">
              <label>Địa Chỉ:</label>
              <input type="text" name="DiaChi" class="form-control" id="diachi" placeholder="Địa Chỉ" required>
            </div>
              <hr>
            <input type="submit" name="nut" class="btn btn-secondary btn-block mb-3 mt-3" value="Tạo tài khoản">
          </form>

          <div class="text-center">
            <p class="font-weight-bold"><?php if(isset($this->message)){echo $this->message;} ?></p>
            <p>hoặc</p>
            <a href="dangnhap" class="btn btn-secondary">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
  <!-- </div>   -->

</main>

<?php
 include_once 'footer.php';
?>
 
