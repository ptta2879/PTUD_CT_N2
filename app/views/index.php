<?php
  include 'header.php';
?>

<section class="container sessionrieng">
  <div class=" shadow-sm p-1 mb-3 mt-3 bg-white rounded">
    
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <?php
    $this->page->tintuc();
   ?>
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
  
</div>
<div class="container shadow-sm p-3 mb-5 mt-5 bg-white rounded">
  <div class="row">
    <div class="col-12">
      <h1 class="h2 text-dark text-center mb-4">SẢN PHẨM MỚI</h1>
    </div>
  </div>
  <div class="row">
   
       <?php
       $this->page->sanphammoi();
       ?>
     
    
</div>
</div>


<div class="container shadow-sm p-3 mb-5 mt-5 bg-white rounded">
  <div class="row">
    <div class="col-12">
      <h1 class="h2 text-dark text-center mb-4">SẢN PHẨM BÁN CHẠY</h1>
    </div>
  </div>
  <div class="row">
    <?php $this->page->sanphambanchay(); ?>
</div>
</div>




<div class="container shadow-sm p-3 mb-5 bg-white rounded">
  <section>
  <div class="row">
    <div class="col-lg-12 col-12 col-sm-12 m-3">
      <h1 class="h2 text-dark text-center mb-4">Danh Mục</h1>
      <div class="ml-4">
      <?php 
        $this->page->danhmuc();
      ?>
  </div>
    </div>
  </div>
</section>
<div class="row">
  <div class="col-lg-12 col-12 col-sm-12 m-3">
  <h1 class="h2 text-dark text-center mb-4">Tất Cả Sản Phẩm</h1>
</div>
</div>
  <div class="row">
  <?php $this->page->tatcasp(); ?>
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

</main>


<?php
  include_once 'footer.php';
  
?>

