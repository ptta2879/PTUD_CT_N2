<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Code with Bootstrap by PM</title>

    <link rel="stylesheet" href="<?php echo DIR_APP ?>views/assets/css/all.css">
    <link href="<?php echo DIR_APP ?>views/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?php echo DIR_APP ?>views/assets/fontawesome/css/fontawesome.min.css"> -->

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
    <link href="<?php echo DIR_APP ?>views/assets/css/dashboard.css" rel="stylesheet">
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

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?php echo $this->active == 'admin'  ? 'active':''  ?>" href="admin.php">
          <span><i class="fas fa-home"></i>
          Trang chủ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanli_donhang.php">
          <span><i class="fas fa-archive"></i></span>
          Quản lí đơn hàng
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php echo $this->active == 'quanli_sanpham'  ? 'active':''  ?>" href="<?php echo DIR ?>quanlisanpham">
          <span><i class="fas fa-shopping-cart"></i></span>
          Quản lí sản phẩm
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanli_baiviet.php">
          <span><i class="fas fa-edit"></i></span>
          Quản lí bài viết
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanli_hangtonkho.php">
          <span><i class="fas fa-user-friends"></i></span>
          Quản lí hàng tồn kho
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanli_nhacungcap.php">
          <span><i class="fas fa-user-friends"></i></span>
          Quản lí nhà cung cấp
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanli_thuoctinh.php">
          <span><i class="fas fa-clipboard-list"></i></span>
          Quản lí thuộc tính
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanli_taikhoannhanvien.php">
          <span><i class="fas fa-user-friends"></i></span>
          Quản lí tài khoản nhân viên
        </a>
      </li>
    </ul>

  </div>
</nav>