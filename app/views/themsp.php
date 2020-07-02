<?php
  include_once 'header_admin.php';
?>

<div class="container-fluid">
  <div class="row">
   
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Thêm sản phẩm mới</h1>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <!-- <h2>Section title</h2> -->
      <!-- <div class="row d-flex align-items-center"> -->
      <!-- <div class="col-8"> -->
      <form method="post" enctype="multipart/form-data">
        <div class="form-group row d-flex justify-content-center">
          <label for="inputName" class="col-sm-2 col-form-label">Tên sản phẩm</label>
          <div class="col-sm-3">
            <!-- <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com"> -->
            <input type="text" class="form-control" id="inputEmail" name="tensp">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputPassword" class="col-sm-2 col-form-label">Số lượng</label>
          <div class="col-sm-3">
            <input type="number" class="form-control" id="inputPassword" name="soluong">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputPassword" class="col-sm-2 col-form-label">Giá</label>
          <div class="col-sm-3">
            <input type="number" class="form-control" id="inputPassword" name="gia">
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="exampleFormControlSelect1"  class="col-sm-2 col-form-label">Nhà sản xuất</label>
          <div class="col-sm-3">
          <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="tennhasx">
            <option value="Apple">Apple</option>
            <option value="Samsung">Samsung</option>
            <!-- <option>3</option>
            <option>4</option>
            <option>5</option> -->
          </select>
          </div>
        </div>
        <div class="form-group row d-flex justify-content-center">
          <label for="hinhdaidien"  class="col-sm-2 col-form-label">Hình đại diện</label>
          <div class="col-sm-3">
            <input type="file" class="form-control-file" id="hinhdaidien" name="hinhdaidien" multiple>
          </div>
        </div>
         <div class="form-group row d-flex justify-content-center">
          <label for="hinhmota"  class="col-sm-2 col-form-label">Hình mô tả</label>
          <div class="col-sm-3">
            <input type="file" class="form-control-file" id="hinhmota" name="files[]" multiple>
          </div>
        </div>

        <?php
          foreach ($this->data as $val) {
            if($val['kieudulieu'] == 'varchar(255)') { $val['kieudulieu'] = 'text';}
            echo '<div class="form-group row d-flex justify-content-center">
          <label for="'.$val['id'].'" class="col-sm-2 col-form-label">'.$val['mota'].'</label>
          <div class="col-sm-3">
            <input type="'.$val['kieudulieu'].'" class="form-control" id="'.$val['id'].'" name="'.$val['tenthuoctinh'].'">
          </div>
        </div>';
          }

        ?>

        <div class="form-group row">
          
          <div class="col-sm-6 d-flex justify-content-end">
          <!-- <button type="button" class="btn btn-secondary btn-sm mb-4">Thêm sản phẩm</button> -->
            <input type="submit" class="btn btn-secondary btn-sm mb-4" name="themsanpham" id="themsanpham" value="Thêm sản phẩm">
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