<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>FAST AND CONVENIENT</title>


<link rel="stylesheet" type="text/css" href="<?php echo DIR_APP ?>views/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo DIR_APP ?>views/assets/css/all.css">
<link rel="stylesheet" type="text/css" href="<?php echo DIR_APP ?>views/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo DIR_APP ?>views/assets/css/mycss.css">


</head>

<body>

 <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container my-container">
    <a class="navbar-brand" href="index.php">
      <img src="<?php echo DIR_APP ?>views/assets/img/logo/logo.png" style="width: 6em;" class="d-inline-block align-top" alt="" >
      
    </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="trangchu"  class="nav-link <?php echo $this->active == 'index'  ? 'active':''  ?>">Trang chủ</a>
          </li>  
          <li class="nav-item">
            <a href="tintuc" class="nav-link <?php echo $this->active == 'thenew'  ? 'active':''  ?>">Tin Tức</a>
          </li>
          <li class="nav-item">
            <a href="gioiThieu" class="nav-link <?php echo $this->active == 'gioithieu'  ? 'active':''  ?>">Giới Thiệu</a>
          </li>
          <li class="nav-item">
            <a href="lienHe" class="nav-link <?php echo $this->active == 'lienhe'  ? 'active':''  ?>">Liên Hệ</a>
          </li>
<?php if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi'])&&$_SESSION['phanquyen']==1)
          {
            echo '</li>
          <li class="nav-item">
            <a href="admin" class="nav-link">Trang Quản Lý</a>
          </li>';
          } ?>
         

        </ul>

        <?php
          if (isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi'])) 
          {
            echo '<a class="text-secondary mr-2" href="thongtincanhan.html"><i class="fas fa-user mr-2"></i>Xin Chào '.$_SESSION['ten'].'</a>';
            echo 
            '<a class="btn btn-sm mr-2 btn-outline-secondary " href="dangxuat"><i class="fas fa-times mr-2"></i>Đăng Xuất</a>
             ';
           
          }
          else
          {
            echo '<a class="btn btn-sm btn-outline-secondary mr-2" href="dangky"><i class="far fa-user mr-2"></i>Đăng Ký</a>
        <a class="btn btn-sm btn-outline-secondary mr-2" href="dangnhap"><i class="fas fa-user mr-2"></i>Đăng Nhập</a>';
          }

        ?>
     <!--  <form method="post" >
       <button type="submit" class="btn btn-sm mr-2 btn-outline-secondary " name="dangxuat"  value="Đăng Xuất"><i class="fas fa-times mr-2"></i>Đăng Xuất</button>
      </form> -->

    
        <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search text-secondary ml-2 mr-4"></i></a>
        <a href="giohang.html"><i class="fas fa-shopping-cart text-secondary mr-2"></i></a>

      </div>
    </div>
  </nav>
</header>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form>
    <div class="modal-content">
      
        <div class="input-group">
          <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
          <div class="input-group-append">
            <button class="btn btn-secondary" type="button" id="button-addon2">Search</button>
          </div>
        </div>
      
    </div>
    </form>
  </div>
</div>