
<?php 
  include_once 'header.php';
 ?>

<div class="container sessionrieng m-t-5">
  <h1 class="h2">Apple Samsung ISphone VVKQ</h1><hr>
  <div class="row m-5 d-flex justify-content-center">
    <!-- <div class="col-lg-1"></div> -->
    <div class="col-lg-5 col-md-6">
      <div class="row">
        <div class="col-12 d-flex d-flex justify-content-start">
          <!-- <img class="mb-4" src="http://placehold.it/400x450" alt="Để hình ở chỗ này nè" > -->
          <span onclick="this.parentElement.style.display='none'" ></span>
          <img id="expandedImg" src="http://placehold.it/400x450" class="hinhct rounded">
          <!-- <div id="imgtext"></div> -->
        </div>
      </div>

      <div class="row mt-3 ">
        <div class="col-12 d-flex justify-content-start">
        <!-- <div class="col-3"> -->
          <img src="http://placehold.it/400x450" class="mr-2 hinh rounded" alt="" style="width:20%" onclick="myFunction(this);">
        <!-- </div> -->
        <!-- <div class="col-3"> -->
          <img src="http://placehold.it/400x450" class="mr-2 hinh rounded" alt="" style="width:20%" onclick="myFunction(this);">
        <!-- </div> -->
        <!-- <div class="col-3"> -->
          <img src="http://placehold.it/400x450" class="mr-2 hinh rounded" alt="" style="width:20%" onclick="myFunction(this);">
        </div>
      </div>

    </div>

    <div class="col-lg-4 col-md-6">
      <h3 class="h4 card-text text-danger font-weight-bold">67.000 VND</h3>
      <?php $this->page->soluong(); ?>
     <!--  <div class="row">
        <div class="col-12 mb-3"> -->
          <form class="form-inline mb-3">
          <label class=" my-1 mr-2 text-secondary" for="inlineFormCustomSelectPref">Chọn số lượng</label>             
           <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected>Chọn</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>

          </form>
        <!-- </div>
      </div> -->
        <div class="xuong"> 
          <a href="#" class="btn btn-outline-danger btn btn-block ">Mua ngay</a>

          <a href="#" class="btn btn-outline-primary btn btn-block ">Thêm vào giỏ hàng</a>
        </div>
      </div>
    </div>

    
    <!-- <div class="col-2"></div> -->
    <!-- </div> -->

      <!-- <div class="row">
        <div class="col-12">
          
          <a href="#" class="btn btn-secondary btn-detail">Mua ngay đi</a>
          <a href="#" class="btn btn-secondary btn-detail">Thêm vào giỏ</a>
        </div>           
      </div> -->
    <div class="row mt-5">
    <div class="col-8 mb-5 ">
      <h1 class="h3">Mô tả</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni soluta, odio, obcaecati pariatur numquam eius voluptatem, explicabo, magnam nostrum possimus veritatis laboriosam aspernatur aperiam corporis molestias beatae sint harum facere.</p>
      <a href="#" class="text-dark">&laquo;Quay về trang chủ </a>
    </div>

    <div class="col-4">
      <h3>Mô Tả</h3>
      <table class="table">
       <tr>
         <td>Màn hình:</td>
         <td>TFT LCD,6.5",Full HD+</td>
       </tr>
       <tr>
        <td>Hệ điều hành:</td>
        <td>Android 10</td>
       </tr>
      </table>
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
