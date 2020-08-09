<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>ADMIN FAST AND CONVENIENT</title>

    <link rel="stylesheet" href="<?php echo DIR_APP ?>views/assets/css/all.css">
    <link href="<?php echo DIR_APP ?>views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo DIR_APP ?>views/assets/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?php echo DIR_APP ?>views/assets/css/style.css">
    <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
<script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
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
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="http://fac.com/trangchu">Vui vẻ không quạo</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  </ul>
</nav>

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="sidebar-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link <?php echo $this->active == 'admin'  ? 'active':''  ?>" href="admin">
          <span><i class="fas fa-home"></i>
          Trang chủ</span>

        </a>
      <?php if($_SESSION['phanquyen']==1){
        include_once('header_admin_nvbh.php');
      }
      elseif ($_SESSION['phanquyen']==2) {
         include_once('header_admin_admin.php');
       } ?>
      
    </ul>

  </div>
</nav>
