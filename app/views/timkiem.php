<?php include_once 'header.php'; ?>

<main>
<div class="container sessionrieng shadow-sm p-3 mb-5 bg-white rounded">
<div class="row">
  <div class="col-lg-12 col-12 col-sm-12 m-3">
  <h1 class="h2 text-dark text-center mb-4">Tìm kiếm Cho Sản Phẩm:<?php echo ' '.$_REQUEST['nd']; ?></h1>
</div>
</div>
  <div class="row">

    

   <?php $this->page->timkiem(); ?> 
</div>

</main>

<?php include_once 'footer.php'; ?>