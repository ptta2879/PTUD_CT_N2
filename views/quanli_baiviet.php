<?php
  include_once 'header_admin.php';
?>

<div class="container-fluid">
  <div class="row">
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Quản lí bài viết</h1>
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
    <a class="btn btn-secondary btn-sm mb-4 " href="thembaiviet.php" role="button">Thêm bài viết mới</a>
    <!-- <h2>Section title</h2> -->
    <div class="table-responsive">
    <table class="table text-center">
        <thead class="thead-light">
          <tr>
            <th scope="col">STT</th>
            <th scope="col">Hình</th>
            <th scope="col">Tên</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            
            <td>England</td>
            <td>English</td>
            <td style="width: 27em; " class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit recusandae, aliquam a. Quam nostrum, eos nisi laboriosam vel saepe ipsum ex similique qui reiciendis asperiores, nobis facilis, at.</td>
            <td>
              <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
            </td>
            <td>
              <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            
            <td>England</td>
            <td>English</td>
            <td style="width: 27em;" class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit recusandae, aliquam a. Quam nostrum, eos nisi laboriosam vel saepe ipsum ex similique qui reiciendis asperiores, nobis facilis, at.</td>
            <td>
              <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
            </td>
            <td>
              <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            
            <td>England</td>
            <td>English</td>
            <td style="width: 27em;" class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos nobis fugit recusandae, aliquam a. Quam nostrum, eos nisi laboriosam vel saepe ipsum ex similique qui reiciendis asperiores, nobis facilis, at.</td>
            <td>
              <a href="#" class="btn btn-sm btn-secondary ">Sửa</a>
            </td>
            <td>
              <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
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

