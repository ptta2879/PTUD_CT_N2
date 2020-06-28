<?php
  include_once 'header_admin.php';
?>


<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí đơn hàng</h1>
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

      <!-- <h2>Section title</h2> -->
      <div class="table-responsive">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr >
              <th scope="col">STT</th>
              <th scope="col">Hình</th>
              <th scope="col">Tên</th>
              <th scope="col">SDT</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Cập nhật</th>
            </tr>
          </thead>
          <tbody >
            <tr>
              <th scope="row">1</th>
              <td>Hinh</td>
              <td>England</td>
              <td>England</td>
              <td>English</td>
              <td>1</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Xác nhận
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Không xác nhận
                  </label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
            </tr>

             <tr>
              <th scope="row">2</th>
              <td>Hinh</td>
              <td class="align-self-center">England</td>
              <td>English</td>
              <td>England</td>
              <td>1</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Xác nhận
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Không xác nhận
                  </label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
            </tr>

             <tr>
              <th scope="row">3</th>
              <td>Hinh</td>
              <td class="align-self-center">England</td>
              <td>English</td>
              <td>England</td>
              <td>1</td>
              <td>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios3">
                    Xác nhận
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios3" value="option2">
                  <label class="form-check-label" for="exampleRadios3">
                    Không xác nhận
                  </label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
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
