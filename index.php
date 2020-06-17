<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Trang Chủ</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="views/css/all.css">
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css"> -->

  

  <style type="text/css">

  /*.bd-placeholder-img {
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
  }*/
  
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    /*border-color:  #6c757d;*/
    border-color: #f8f9fa;
    outline: 0;
    box-shadow:  0 0 0 .2rem rgba(108,117,125,.2);
  }

  .breadcrumb {
    background-color: #fff;
    padding: 0.75em 0em;

  }


  .pagination li.page-item a.page-link {
    color: #6c757d;

  }

  .pagination li.page-item.active .page-link {
    background-color: #545b62;
    color: #fff;
    border-color: #545b62;
  }


  .badge {
    /*display: inline-block;*/
    /*padding: .25em .4em;*/
    font-size: 80%;
    /*font-weight: 700;*/
    line-height: 2;
    /*text-align: center;*/
    /*white-space: nowrap;*/
    /*vertical-align: baseline;*/
    border-radius: 1.25rem;
  }
  </style>

</head>

  <body>


<header>
    <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a href="index.php" class="navbar-brand">Small business</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Danh Mục
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Apple</a>
          <a class="dropdown-item" href="#">SamSung</a>
        </div>
      </li>
          <li class="nav-item">
            <a href="TinTuc.php" class="nav-link">Tin Tức</a>
          </li>
          <li class="nav-item">
            <a href="GioiThieu.php" class="nav-link">Giới Thiệu</a>
          </li>
          <li class="nav-item">
            <a href="LienHe.php" class="nav-link">Liên Hệ</a>
          </li>
        </ul>
    
      <!-- </div> -->
        <!-- <div class="col-4 d-flex justify-content-end align-items-center ml-auto"> -->
        <!-- <div class="dropdown"> -->
        <!-- <a class="btn btn-sm btn-outline-secondary mr-2 border-0 " data-toggle="modal" data-target="#modalSmall" href="#" aria-label="Search"><i class="fas fa-search mr-2"></i></a> -->
        
        <a class="btn btn-sm btn-outline-secondary mr-2" href="signUp.php"><i class="far fa-user mr-2"></i>Đăng Ký</a>
        <a class="btn btn-sm btn-outline-secondary mr-2" href="signIn.php"><i class="fas fa-user mr-2"></i>Đăng Nhập</a>
        <a href="cart.php"><i class="fas fa-shopping-cart text-secondary mr-2"></i></a>

      <!-- </div> -->
      </div>
    </div>
    </nav>
  </div>
</header>


<section class="sessionrieng">
  <div class="container shadow-sm p-1 mb-3 mt-3 bg-white rounded">
    
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://placehold.it/1000x400" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://placehold.it/1000x400" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="http://placehold.it/1000x400" class="d-block w-100 rounded" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</section>





<main>
<div class="container shadow-sm p-3 mb-5 mt-5 bg-white rounded">
  <div class="row">
    <div class="col-12">
      <h1 class="h4 text-dark text-center mb-4">SẢN PHẨM MỚI</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-4 border-right">    
      <div class="row">
        <div class="col-6">

          <img src="http://placehold.it/180x140" class="figure-img img-fluid rounded" alt="">
        </div>
        <div class="col-6 p-0">
          <p class="mb-0">Day la chu ne nha</p>
          <p>Gia ne</p>
          <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>  
        </div>   
      </div>
    </div>

    <div class="col-4 border-right">    
      <div class="row">
        <div class="col-6">
          <img src="http://placehold.it/180x140" class="img-fluid rounded" alt="">
        </div>
        <div class="col-6 p-0">
          <p class="mb-0">Day la chu ne nha</p>
          <p>Gia ne</p>
          <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>  
        </div>     
      </div>
    </div>

  <div class="col-4 ">    
       <div class="row">
         <div class="col-6">
           <img src="http://placehold.it/180x140" class="figure-img img-fluid rounded" alt="">
         </div>
         <div class="col-6 p-0">
           <p class="mb-0">Day la chu ne nha</p>
           <p>Gia ne</p>
           <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  
         </div>     
       </div>
     </div>
  </div>
</div>


<div class="container shadow=sm p-3 mb-5 mt-5 bg-white rounded">
  <div class="row">
    <div class="col-12">
      <h1 class="h4 text-dark text-center mb-4">SẢN PHẨM BÁN CHẠY</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-4 border-right">    
      <div class="row">
        <div class="col-6">
          <img src="http://placehold.it/180x140" class="figure-img img-fluid rounded" alt="">
        </div>
        <div class="col-6 p-0">
          <p class="mb-0">Day la chu ne nha</p>
          <p>Gia ne</p>
          <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>  
        </div>     
      </div>
    </div>

    <div class="col-4 border-right">    
      <div class="row">
        <div class="col-6">
          <img src="http://placehold.it/180x140" class="img-fluid rounded" alt="">
        </div>
        <div class="col-6 p-0">
          <p class="mb-0">Day la chu ne nha</p>
          <p>Gia ne</p>
          <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>  
        </div>     
      </div>
    </div>

  <div class="col-4 ">    
       <div class="row">
         <div class="col-6">
           <img src="http://placehold.it/180x140" class="figure-img img-fluid rounded" alt="">
         </div>
         <div class="col-6 p-0">
           <p class="mb-0">Day la chu ne nha</p>
           <p>Gia ne</p>
           <p class="small text-secondary">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>  
         </div>     
       </div>
     </div>
  </div>
</div>

<!-- <div class="container shadow-sm p-3 mb-5 mt-5 bg-white rounded">
   <div class="row">
     <div class="col-12">
       <h1 class="h4 text-dark text-center mb-4">SẢN PHẨM BÁN CHẠY</h1>
     </div>
   </div>
   <div class="row">
     <div class="col-6">    
       <div class="row">
         <div class="col-6">
           <img src="http://placehold.it/280x200" class="figure-img img-fluid rounded" alt="">
         </div>
         <div class="col-6">
           <p>Day la chu ne nha</p>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, iure dolorem officia libero amet necessitatibus delectus illo in architecto? </p>  
         </div>     
       </div>
     </div>

    <div class="col-6">    
      <div class="row">
        <div class="col-6">
          <img src="http://placehold.it/280x200" class="figure-img img-fluid rounded" alt="">
        </div>
        <div class="col-6">
          <p>Day la chu ne nha</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, iure dolorem officia libero amet necessitatibus delectus illo in architecto?</p>  
        </div>     
      </div>
    </div>

   
  </div>
</div> -->





<div class="container shadow-sm p-3 mb-5 bg-white rounded">
  <!-- <div class="row">
    <div class="col-12">
      <h1 class="h2 text-secondary">Sản phẩm</h1>
    </div>
  </div> -->

  <section>
  <!-- <div class="container mt-4 "> -->
  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <span class="badge badge-secondary">Giá từ thấp đến cao</span>
      <span class="badge badge-secondary">Giá từ cao đến thấp</span>
      <span class="badge badge-secondary">Bán chạy nhất</span>
      <span class="badge badge-secondary">Mới nhất</span>
      <span class="badge badge-secondary">Dark</span>
    </div>
    <div class="input-group mb-4 col-lg-4 col-sm-12 ml-auto">
      <input type="text" class="form-control change-boxshadow" placeholder="Search text here" aria-label="Text input with button">
      <span class="input-group-append">
         <button type="button" class="btn btn-sm btn-secondary border-secondary">Search</button>
      </span>
    </div>
  </div>
<!-- </div> -->
</section>

  <div class="row">
    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>
  </div>


  <div class="row">
    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>
  </div>


  <div class="row">
    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>

    <div class="col-3">
      <a href="#">
       <figure class="figure">
        <img src="http://placehold.it/285x300" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">Ten san pham</p>
          <p class="h6 font-weight-normal mb-0 text-dark">Gia ne</p>
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus eos odio ab, quia consequuntur</p>
        </figcaption>
      </figure>
      </a>
    </div>
  </div>

   <div class="row">
      <div class="col-12 d-flex justify-content-center mt-5 mb-5">
        <nav aria-label="...">
          <ul class="pagination shadow-sm">
            <li class="page-item">
              <a class="page-link text-secondary" href="#" >Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>   
</div>



<!-- <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-center mb-5">
        <nav aria-label="...">
          <ul class="pagination shadow-sm">
            <li class="page-item">
              <a class="page-link text-secondary" href="#" >Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>    
</div>
 -->
</main>



<footer class="small bg-light">
      <div class="container py-3 py-sm-5">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Quick links</h6>
            <ul class="list-unstyled">
              <li><a class="text-secondary" href="index.php">Home</a></li>
              <li><a class="text-secondary" href="services.html">Services</a></li>
              <li><a class="text-secondary" href="about.html">About</a></li>
              <li><a class="text-secondary" href="team.html">Team</a></li>
              <li><a class="text-secondary" href="contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Information</h6>
            <ul class="list-unstyled">
              <li><a class="text-secondary" href="#0">Legal information</a></li>
              <li><a class="text-secondary" href="#0">Job opportunities</a></li>
              <li><a class="text-secondary" href="#0">Frequently Asked Questions</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Follow us</h6>
            <ul class="list-unstyled">
              <li><a href="#0" class="text-secondary" ><i class="fab fa-facebook" aria-hidden="true"></i> Facebook</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-twitter" aria-hidden="true"></i> Twitter</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-youtube" aria-hidden="true"></i> YouTube</a></li>
              <li><a href="#0" class="text-secondary" ><i class="fab fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Our location:</h6>
            <address>
              <strong>Company Name</strong><br>
              Steet Name<br>
              ZIP code and city<br>
              <i class="fa fa-fw fa-phone" aria-hidden="true"></i> <a href="tel:+1234567890" class="text-secondary" >(123) 456-7890</a><br>
              <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@domain.com" class="text-secondary" >info@domain.com</a>
            </address>
          </div>
        </div>
        <ul class="list-inline mt-2 mb-0 text-center">
          <li class="list-inline-item">&copy; 2017 Company Name</li>
          <li class="list-inline-item">All rights reserved.</li>
        </ul>
      </div>
    </footer>





  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
