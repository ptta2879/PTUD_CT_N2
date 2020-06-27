<?php 

  session_start(); 
  if(isset($_REQUEST['dangxuat']))
  {
    $nutdangxuat=$_REQUEST['dangxuat'];
  }
  else
  {
    $nutdangxuat='';
  }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FAST AND CONVENIENT</title>


<link rel="stylesheet" type="text/css" href="views/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="views/assets/css/all.css">
<link rel="stylesheet" type="text/css" href="views/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="views/assets/css/mycss.css">
<link REL="SHORTCUT ICON" HREF="views/assets/img/logo/FAC2.ico">
</head>

<body>

 <header>
    <!-- <div class="container-fluid"> -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand">
            <img class="hinh" src="views/assets/img/logo/FAC2.ico">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <form class="input-group col-12 col-lg-2 col-md-12 col-sm-12 ">
      <input type="text" class="form-control change-boxshadow" placeholder="Tìm Kiếm" aria-label="Text input with button">
      <span class="input-group-append">
         <button type="button" class="btn btn-sm btn-secondary border-secondary">Search</button>
      </span>
    </form>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a href="index.php" class="nav-link">Trang Chủ</a>
              </li>  
              <li class="nav-item">
                <a href="tinTuc.php" class="nav-link">Tin Tức</a>
              </li>
              <li class="nav-item">
                <a href="gioiThieu.php" class="nav-link">Giới Thiệu</a>
              </li>
              <li class="nav-item">
                <a href="lienHe.php" class="nav-link">Liên Hệ</a>
              </li>

            </ul>
 

            <?php 
              if (isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi'])) 
              {
                echo '<a class="text-secondary mr-2" href="thongtincanhan.php"><i class="fas fa-user mr-2"></i>Xin Chào '.$_SESSION['ten'].'</a>';
                echo '<form method="post" >
                 <button type="submit" class="btn btn-sm mr-2 btn-outline-secondary " name="dangxuat"  value="Đăng Xuất"><i class="fas fa-times mr-2"></i>Đăng Xuất</button>

                </form>
                 ';
               
              }
              else
              {
                echo '<a class="btn btn-sm btn-outline-secondary mr-2" href="signUp.php"><i class="far fa-user mr-2"></i>Đăng Ký</a>
            <a class="btn btn-sm btn-outline-secondary mr-2" href="signIn.php"><i class="fas fa-user mr-2"></i>Đăng Nhập</a>';
              }
              switch ($nutdangxuat) {
                case 'Đăng Xuất':
                  {
                    session_destroy();
                    echo '<META http-equiv="refresh" content="0;URL=index.php" charset="utf8">';
                    break;
                  }
              }
            ?>
            
            <a href="cart.php"><i class="fas fa-shopping-cart text-secondary mr-2"></i></a>

          </div>
        </div>
      </nav>
    <!-- </div> -->
  </header>