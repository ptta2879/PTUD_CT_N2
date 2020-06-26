<?php
 include 'header.php';
 include 'controllers/dangky_c.php';
 $p = new dangky();
 
 if(isset($_REQUEST['nut']))
 {
  $nut=$_REQUEST['nut'];
 }
 else
 {
  $nut='';
 }
?>
 

<main>

  <div class="jumbotron jumbotron-fluid sessionrieng">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4">
          <h1 class="mb-3 text-center">Tạo tài khoản mới</h1>
          <p class="lead">Đăng ký miễn phí.</p>
          <form class="mb-3">
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
              <input type="number" name="sdt" class="form-control" id="SDT" placeholder="Số Điện Thoại" required>
            </div>
            <div class="form-group">
              <label>Địa Chỉ:</label>
              <input type="text" name="DiaChi" class="form-control" id="diachi" placeholder="Địa Chỉ" required>
            </div>
              <hr>
            <input type="submit" name="nut" class="btn btn-secondary btn-block mb-3 mt-3" value="Tạo tài khoản">
          <?php
            switch ($nut) {
              case 'Tạo tài khoản':
                {

                  $hovatendem=$_REQUEST['hotendem'];
                  $name=$_REQUEST['ten'];
                  $user=$_REQUEST['email'];
                  $pass=md5($_REQUEST['matkhau']);
                  $sdt=$_REQUEST['sdt'];
                  $diachi=$_REQUEST['DiaChi'];
                  $p->dangkytk($hovatendem,$name,$user,$pass,$sdt,$diachi);
                  break;
                }  
            }
          ?>
          </form>
          <div class="text-center">
            <p>hoặc</p>
            <a href="#" class="btn btn-secondary">Đăng nhập</a>
          </div>
        </div>
      </div>
    </div>
  </div>  

</main>

<?php
 include_once 'footer.php';
?>
 
