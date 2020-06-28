<?php
  require_once '../models/databaseKH.php';
  $insert = new databasekhachhang();
?>

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
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
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

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sửa bài viết</h1>
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
      <!-- <a class="btn btn-secondary btn-sm mb-4 " href="#" role="button">Thêm bài viết mới</a> -->
      <!-- <h2>Section title</h2> -->
      <form name="formPost" id="formPost" method="post" enctype="multipart/form-data">
        <textarea name="editor1" id="editor1" rows="10" cols="80">Nội dung bài viết cũ</textarea>
        <script>CKEDITOR.replace( 'editor1' );</script>
        <input type="submit" class="btn btn-secondary btn-sm mt-2" name="login" id="login" value="Lưu">
      </form>
    </main>
  </div>
</div>

<?php
  $contents = $_REQUEST['editor1'];
  // print_r($content);
  if($contents) {
    $insert->themdulieusp($contents,1);
    echo 'Them thanh cong';
  }
  

?>




    <!-- <script src="assets/dashboard.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
