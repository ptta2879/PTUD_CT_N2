<?php
 include_once 'header.php';
?>
 
<main>
  <div class="container sessionrieng">
    <div class="row">
      <div class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4">
        <div class=" d-flex justify-content-center">
          <img class="mb-4" src="<?php echo DIR_APP ?>/views/assets/img/logo/logo.png" alt="Để hình ở chỗ này nè" >
        </div>
        <h1 class="h3 font-weight-normal mb-3 text-center">Đăng nhập</h1>
        <form class="mb-3" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="username" class="form-control" placeholder="example@email.com" id="email" required>
          </div>
          <div class="form-group">
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" class="form-control" id="password" required>
          </div>
          
          <?php if(isset($this->message)) {echo $this->message;} ?>
          <button type="submit" name="nut" class="btn btn-secondary btn-block">Đăng nhập</button>
        </form>
        <div class="text-center">
          <p>hoặc</p>
          <a href="#" class="btn btn-secondary mb-3">Tạo tài khoản</a>
          <p class="small"><a href="#" class="text-secondary">Quên mật khẩu hoặc tài khoản?</a></p>
        </div>
      </div>
    </div>
  </div>

</main>


<?php
  include_once 'footer.php';

?>