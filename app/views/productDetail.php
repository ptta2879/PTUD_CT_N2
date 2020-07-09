
<?php 
  include_once 'header.php';
 ?>

<?php 
  $tensp = $this->data['tensp'];
  $idsp = $this->data['idsp'];
  // $chungloai = $this->data['chungloai'];
  // print_r($chungloai); die();
  $dir = LINK.$idsp.'_';

?>

<div class="container sessionrieng m-t-5">
  <h1 class="h2"><?php echo $this->data['tensp'] ?></h1><hr>
  <div class="row m-5 d-flex justify-content-center">
    <!-- <div class="col-lg-1"></div> -->
    <div class="col-lg-5 col-md-6">
      <div class="row">
        <div class="col-12 d-flex d-flex justify-content-start">
          <!-- <img class="mb-4" src="http://placehold.it/400x450" alt="Để hình ở chỗ này nè" > -->
          <span onclick="this.parentElement.style.display='none'" ></span>
          <img id="expandedImg" src="<?php echo $dir.'1_mota.jpg'; ?>" width="100%" height="400px" class="hinhct rounded">
          <!-- <div id="imgtext"></div> -->
        </div>
      </div>

      <div class="row mt-3 ">
        <div class="col-12 d-flex justify-content-start">
        <!-- <div class="col-3"> -->
          <img src="<?php echo $dir.'1.jpg'; ?>" class="mr-2 hinh rounded" alt="" style="width:20%" onclick="myFunction(this);">
        <!-- </div> -->
        <!-- <div class="col-3"> -->
          <img src="<?php echo $dir.'2.jpg'; ?>" class="mr-2 hinh rounded" alt="" style="width:20%" onclick="myFunction(this);">
        <!-- </div> -->
        <!-- <div class="col-3"> -->
          <img src="<?php echo $dir.'3.jpg'; ?>" class="mr-2 hinh rounded" alt="" style="width:20%" onclick="myFunction(this);">
        </div>
      </div>

    </div>
  
    <div class="col-lg-4 col-md-6">
      <h3 class="h4 card-text text-danger font-weight-bold"><?php echo $this->data['gia'] ?> VND</h3>
      <?php $this->page->soluong();?>
     <!--  <div class="row">
        <div class="col-12 mb-3"> -->
          <form class="form-inline mb-3" method="post">
          <input type="hidden" name="tensp" value="<?php echo $tensp ?>">
          <input type="hidden" name="gia" value="<?php echo $this->data['gia'] ?>">
          <label class=" my-1 mr-2 text-secondary" for="inlineFormCustomSelectPref">Chọn số lượng</label>             
           <input type="number" min="1" max="<?php echo $this->data['soluongsp'] ?>"  name="soluong" class="form-control my-1 mr-sm-2" />
          <div>
          <?php foreach ($this->data['thuoctinh'] as $key => $value) {
            if($this->data['mota'][$key] != 'Mô tả'){
              echo '<span class="text-secondary">'.$this->data['mota'][$key].'</span>';
              echo '<span class="ml-4 font-weight-bold text-secondary">'.$value.'</span><br>';
            }
          }

          ?>
          </div>
       <!-- </div>
      </div> -->
        <div class="xuong">
        <?php if(isset($_SESSION['username'])&&isset($_SESSION['password'])&&isset($_SESSION['phanquyen'])&&isset($_SESSION['hotendem'])&&isset($_SESSION['ten'])&&isset($_SESSION['sdt'])&&isset($_SESSION['diachi']))
    {
      echo '

              <button type="submit" class="btn btn-outline-primary btn-block" name="themvaogio">Thêm vào giỏ</button>
          

         ';
    }
    else{
      echo '<a href="dangnhap" class="btn btn-outline-warning btn-block ">Đăng nhập để mua hàng</a>';
    }
     ?> 
        </div>
        </form>
      </div>
    </div>

  <!-- <a href="giohang.html" class="btn btn-outline-primary btn-block ">Thêm vào giỏ hàng</a> -->
    <!-- <div class="col-2"></div> -->
    <!-- </div> -->

      <!-- <div class="row">
        <div class="col-12">
          
          <a href="#" class="btn btn-secondary btn-detail">Mua ngay đi</a>
          <a href="#" class="btn btn-secondary btn-detail">Thêm vào giỏ</a>
        </div>           
      </div> -->
    <div class="row mt-5">
    <div class="col-12 mb-5 ">
      <?php if(isset($this->data['thuoctinh']['mota'])) { 
        echo '<h1 class="h3">Mô tả</h1>';
        echo '<p>'.$this->data['thuoctinh']['mota'].'</p>';

        } 
      ?>
     
      <a href="trangchu" class="text-dark">&laquo;Quay về trang chủ </a>
    </div>

    

  </div>


</div>
  

</main>


<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  // var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  // imgText.innerHTML = imgs.alt;
  // expandImg.parentElement.style.display = "block";
}
</script>

<?php 
  include_once 'footer.php';
?>
