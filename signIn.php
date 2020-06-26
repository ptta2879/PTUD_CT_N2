<?php
 include 'header.php';
 include('controllers/dangnhap_c.php');
 $p = new DangNhap();
 if(isset($_REQUEST['nut']))
 {
  $nut=$_REQUEST['nut'];
 }
 else
 {
  $nut='';
 }

if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi']))
{
  echo '<script type="text/javascript">window.location="index.php"</script>';
}
?>
 
<main>
  <div class="container sessionrieng">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4">
        <div class=" d-flex justify-content-center">
          <img class="mb-4" src="http://placehold.it/90x90" alt="Để hình ở chỗ này nè" width="90" height="90">
        </div>
        <h1 class="h3 font-weight-normal mb-3 text-center">Đăng nhập</h1>
        <form method="post" class="mb-3">
          <div class="form-group">
            <label for="email">Tên đăng nhập:</label>
            <input type="email" name="username" class="form-control" placeholder="Email" id="email" required>
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" placeholder="Mật Khẩu" class="form-control" id="password" required>
          </div>
          <input type="submit" name="nut" class="btn btn-secondary btn-block" value="Đăng Nhập">
          <?php 
            switch ($nut) {
              case 'Đăng Nhập':
                {
                  $username=$_REQUEST['username'];
                  $password=$_REQUEST['password'];
                  $p->login($username,$password);
                  break;
                }
            }
          ?> 
        </form>
        <div class="text-center">
          <p>hoặc</p>
          <a href="signUp.php" class="btn btn-secondary mb-3">Tạo tài khoản</a>
          
        </div>
      </div>
    </div>
  </div>

</main>


<?php
  include_once 'footer.php';

?>