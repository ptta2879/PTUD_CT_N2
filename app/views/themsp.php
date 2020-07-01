<?php
  include_once 'header_admin.php';
?>

<div class="container-fluid">
  <div class="row">
   
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Thêm sản phẩm mới</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Section title</h2> -->
      <!-- <div class="row d-flex align-items-center"> -->
      <!-- <div class="col-8"> -->
      <form>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputName" class="col-sm-2 col-form-label">Tên sản phẩm</label>
          <div class="col-sm-3">
            <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com"> -->
            <input type="text" class="form-control" id="inputEmail">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputPassword" class="col-sm-2 col-form-label">Số lượng</label>
          <div class="col-sm-3">
            <input type="number" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputPassword" class="col-sm-2 col-form-label">Giá</label>
          <div class="col-sm-3">
            <input type="number" class="form-control" id="inputPassword">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="exampleFormControlSelect1"  class="col-sm-2 col-form-label">Nhà cung cấp</label>
          <div class="col-sm-3">
          <select class="form-control form-control-sm" id="exampleFormControlSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </div>
        </div>
         <div class="form-group row d-flex justify-content-center">
          <label for="exampleFormControlFile1"  class="col-sm-2 col-form-label">Hình đại diện</label>
          <div class="col-sm-3">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </div>

        <div class="form-group row">
          
          <div class="col-sm-6 d-flex justify-content-end">
          <!-- <button type="button" class="btn btn-secondary btn-sm mb-4">Thêm sản phẩm</button> -->
            <input type="submit" class="btn btn-secondary btn-sm mb-4" name="login" id="login" value="Thêm sản phẩm">
          </div>
          <div class="col-sm-6">
            <input type="reset" class="btn btn-secondary btn-sm mb-4" name="reset" id="reset" value="Đặt lại">
          </div>
        </div>
      </form>
      <!-- </div> -->
      <!-- </div> -->
    </main>
  </div>
</div>

<?php
  include_once 'footer_admin.php';
?>