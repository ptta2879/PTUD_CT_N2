<?php
 include_once 'header.php';
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
                <label for="firstName">Họ và tên đệm:</label>
                <input type="text" class="form-control" placeholder="First name" id="firstName" required>
              </div> 
              <div class="form-group col-12 col-sm-6">
                <label for="lastName">Tên:</label>
                <input type="text" class="form-control" placeholder="Last name" id="lastName" required>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" placeholder="example@email.com" id="email" required>
            </div>
            <div class="form-group">
              <label for="password">Mật khẩu:</label>
              <input type="password" class="form-control" id="password" required>
            </div>
            <label>Ngày sinh:</label>
            <div class="row no-gutters">
              <div class="form-group col-4">
                <label for="birthdayDay" class="sr-only">Ngày sinh</label>
                <select class="form-control" id="birthdayDay">
                  <option vaule="">Ngày</option>
                  <option value="january">January</option>
                  <option value="january">January</option>
                </select>
              </div>
              <div class="form-group col-4">
                <label for="birthdayMonth" class="sr-only">Tháng sinh</label>
                <select class="form-control" id="birthdayMonth">
                  <option value="">Tháng</option>
                  <option value="january">January</option>
                  <option value="january">January</option>
                </select>
              </div>
              <div class="form-group col-4">
                <label for="birthdayYear" class="sr-only">Năm sinh</label>
                <select class="form-control" id="birthdayYear">
                  <option value="1980">1980</option>
                  <option value="1981">1981</option>
                </select>
              </div>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" name="exampleRadios" id="exampleRadios1" class="form-check-input" value="optionOne" checked>
                Nam
              </label>
            </div>
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input type="radio" name="exampleRadios" id="exampleRadios2" class="form-check-input" value="optionTwo">
                Nữ
              </label>
            </div>
            <button type="submit" class="btn btn-secondary btn-block mb-3">Tạo tài khoản</button>
            <div class="alert alert-secondary small" role="alert">By clicking above you agree to our <a href="#" class="alert-link">Terms &amp; Conditions</a> and our <a href="#" class="alert-link">Privacy Policy</a>.</div>
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
 
