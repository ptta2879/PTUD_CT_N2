<?php
  include_once 'header_admin.php';
?>

<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí hàng tồn kho</h1>
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
      <div class="table-responsive">
      <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên sản phẩm</th>             
              <th scope="col">Số lượng</th>
              <th scope="col">Giá</th>
              <th scope="col">Ngày nhập</th>
              <th scope="col">Sửa</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>England</td>
              <td>England</td>
              <td>England</td>
              <td>English</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
              </td>
              
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>France</td>
              <td>French</td>
              <td>Paris</td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
              </td>
              
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Germany</td>
              <td>German</td>
              <td>Berlin</td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary " data-toggle="modal" data-target="#hangtonkho">Sửa</a>
              </td>
              
            </tr>
          </tbody>
        </table>
    </div>
    </main>
  </div>
</div>



</main>

<div class="modal fade" id="hangtonkho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form name="suathongtin" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập hàng cho sản phẩm ISphone</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="sm_name" class="col-form-label">Ngày nhập</label>
            <input type="text" class="form-control" id="sm_name" name="hotendem">
          </div>
          <div class="form-group">
            <label for="name" class="col-form-label">Giá</label>
            <input type="text" class="form-control" id="name" name="ten">
          </div>
          <div class="form-group">
            <label for="phone" class="col-form-label">Số lượng</label>
            <input type="number" class="form-control" id="phone" name="sdt">
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

<?php
  include_once 'footer_admin.php';
?>