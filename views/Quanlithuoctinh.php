<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Code with Bootstrap by PM</title>

    <link rel="stylesheet" href="assets/css/all.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/fontawesome/css/fontawesome.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Vui vẻ không quạo</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <?php
      include_once 'nav_menu.php';
    ?>

    <!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="admin.php">
              <span><i class="fas fa-home"></i>
              Trang chủ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlidonhang.php">
              <span><i class="fas fa-archive"></i></span>
              Quản lí đơn hàng
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlisanpham.php">
              <span><i class="fas fa-shopping-cart"></i></span>
              Quản lí sản phẩm
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlibaiviet.php">
              <span><i class="fas fa-edit"></i></span>
              Quản lí bài viết
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Quanlithuoctinh.php">
              <span><i class="fas fa-clipboard-list"></i></span>
              Quản lí thuộc tính
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quanlitaikhoannhanvien.php">
              <span><i class="fas fa-user-friends"></i></span>
              Quản lí tài khoản nhân viên
            </a>
          </li>
        </ul>
      </div>
    </nav> -->

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


    <!-- <script src="dashboard.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
