<?php
  include_once 'header_admin.php';
?>

<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí thuộc tính</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#exampleModal">Thêm thuộc tính mới</button>

      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
           <!--  <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tên thuộc tính</label>
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
      <!-- <h2>Section title</h2> -->
      <!-- <div>
        <a href="#" class="btn btn-sm btn-secondary ">Thêm</a>
      </div> -->
    
      <div class="table-responsive">
        <table class="table table-striped table-sm ">
          <thead>
            <tr >
              <th scope="col">STT</th>
              <th scope="col">Tên</th>
              <th scope="col">Kiểu dữ liệu</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Xác nhận</th>
            </tr>
          </thead>
          <tbody >
            <tr>
              <th scope="row">1</th>
              <td class="align-self-center">England</td>
              <td>English</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios3" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Ẩn
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios3" value="option2">
                  <label class="form-check-label" for="exampleRadios1">
                    Hiện
                  </label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xác nhận</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              
              <td class="align-self-center">England</td>
              <td>English</td>
            
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios2">
                    Ẩn
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios3" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Hiện
                  </label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xác nhận</a>
              </td>
            </tr>

             <tr>
              <th scope="row">3</th>
             
              <td class="align-self-center">England</td>
              <td>English</td>
             
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios3">
                    Ẩn
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="option2">
                  <label class="form-check-label" for="exampleRadios3">
                    Hiện
                  </label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xác nhận</a>
              </td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<?php
  include_once 'footer_admin.php';
?>
