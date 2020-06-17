<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giỏ Hàng</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="views/css/all.css">
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="views/fontawesome/css/fontawesome.min.css">

  </head>

  <style type="text/css">

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


.check {
  display: block;
  position: relative;
  padding-left: 1em;
  cursor: pointer;
  font-size: 0.5em;
}

.check input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

.checkmark {
  position: absolute;
  top: 0.25em;
  left: ;
  height: 2em;
  width: 2em;
  /*border: 1px solid #f8f9fa;*/
  background-color: #dee2e6;
  border-radius: 0.3em;
}

.check:hover input ~ .checkmark {
  background-color: #545b62;
  box-shadow:  0 0 0 .2rem rgba(108,117,125,.2);
}

.check input:checked ~ .checkmark {
  background-color: #545b62;
  box-shadow:  0 0 0 .2rem rgba(108,117,125,.2);
}


.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.check input:checked ~ .checkmark:after {
  display: block;
}


.check .checkmark:after {
  left: 0.55em;
  top: 0em;
  width: 0.75em;
  height: 1.5em;
  border: solid #dee2e6;
  border-width: 0 0.25em 0.25em 0;
  transform: rotate(45deg);
}


.custom-select {
  width: 4em;
}

  </style>

  <body>


<header>
    <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a href="index.html" class="navbar-brand">Small business</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a href="services.html" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="about.html" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="team.html" class="nav-link">Team</a>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
          </li>
        </ul>
    
      <!-- </div> -->
        <!-- <div class="col-4 d-flex justify-content-end align-items-center ml-auto"> -->
        <!-- <div class="dropdown"> -->
        <!-- <a class="btn btn-sm btn-outline-secondary mr-2 border-0 " data-toggle="modal" data-target="#modalSmall" href="#" aria-label="Search"><i class="fas fa-search mr-2"></i></a> -->
        <a class="btn btn-sm btn-outline-secondary mr-2" href="#"><i class="far fa-user mr-2"></i>Sign up</a>
        <a class="btn btn-sm btn-outline-secondary mr-2" href="#"><i class="fas fa-user mr-2"></i>Sign in</a>
        <a href="#"><i class="fas fa-shopping-cart text-secondary mr-2"></i></a>

      <!-- </div> -->
      </div>
    </div>
    </nav>
  </div>
</header>


<section>
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark ">
    <div class="col-md-6 px-0 py-3">
      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
  </div>

</section>

  <!-- <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-primary">World</strong>
            <h3 class="mb-0">Featured post</h3>
            <div class="mb-1 text-muted">Nov 12</div>
            <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <strong class="d-inline-block mb-2 text-success">Design</strong>
            <h3 class="mb-0">Post title</h3>
            <div class="mb-1 text-muted">Nov 11</div>
            <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
            <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
          </div>
        </div>
      </div>
    </div> -->
</div>


<section>
  <div class="container">
  <div class="row">
    <div class="col-lg-8 col-sm-12">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#" class="text-dark" >Thịt chó</a></li>
          <li class="breadcrumb-item"><a href="#" class="text-dark">Các món</a></li>
          <li class="breadcrumb-item"><a href="#" class="text-dark">Luộc</a></li>
          <li class="breadcrumb-item active">Đang ăn</li>
        </ol>
    </div>
    <div class="input-group mb-4 col-lg-4 col-sm-12 ml-auto">
      <input type="text" class="form-control change-boxshadow" placeholder="Search text here" aria-label="Text input with button">
      <span class="input-group-append">
         <button type="button" class="btn btn-secondary border-secondary">Search</button>
      </span>
    </div>
  </div>
</div>
</section>

<main>


<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="h2 font-weight-normal text-dark">Giỏ hàng</h1>
    </div>
    <div class="col-12">
      <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Chọn</th>
              <th scope="col">Hình</th>
              <th scope="col">Tên</th>
              <th scope="col">Số lượng</th>
              <th scope="col">Tổng</th>
              <th scope="col">Cập nhật</th>
              <th scope="col">Xóa</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>
                
              <div class="checkbox">             
                  <label class="check"><input type="checkbox" name="checkbox"><span class="checkmark"></span></label>
              </div>
                
              </td>
              <td>England</td>
              <td>English</td>
              <td>
                <select class="custom-select" id="inlineFormCustomSelectPref">
                <option selected>1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
              </td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>
                 <div class="checkbox">             
                  <label class="check"><input type="checkbox" name="checkbox"><span class="checkmark"></span></label>
              </div>
              </td>
              <td>France</td>
              <td>French</td>
              <td>Paris</td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>
                 <div class="checkbox">             
                  <label class="check"><input type="checkbox" name="checkbox"><span class="checkmark"></span></label>
              </div>               
              </td>
              <td>Germany</td>
              <td>German</td>
              <td>Berlin</td>
              <td>England</td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Cập nhật</a>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xóa</a>
              </td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>

  <div class="row">
    <div class="col-6 ml-auto mt-5 mb-5">
      <h1 class="h3 font-weight-normal text-dark">Tổng số hàng đã chọn</h1>
      <table class="table table-bordered">
      <tbody>
        <tr>
          <th scope="row">Tổng</th>
          <td>100</td>
        </tr>
        <tr>
          <th scope="row">VAT</th>
          <td>10</td>
          
        </tr>
        <tr>
          <th scope="row">Tổng tiền</th>
          <td>110</td>
        </tr>
      </tbody>
      </table>
      <div class="d-flex flex-row-reverse">
      <a href="#" class="btn btn-dark ">Thanh toán</a>
      </div>  
    </div>
  </div>

</div>
</main>



<footer class="small bg-light">
      <div class="container py-3 py-sm-5">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <h6>Quick links</h6>
            <ul class="list-unstyled">
              <li><a class="text-secondary" href="index.html">Home</a></li>
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
