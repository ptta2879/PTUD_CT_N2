<?php
  require_once 'header_admin.php';
?>

<script type="text/javascript" src="<?php echo DIR_APP ?>views/assets/ckeditor/ckeditor.js"></script>


<div class="container-fluid">
  <div class="row">

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Thêm bài viết</h1>
        <!-- <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div> -->
        
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
      <!-- <a class="btn btn-secondary btn-sm mb-4 " href="#" role="button">Thêm bài viết mới</a> -->
      <!-- <h2>Section title</h2> -->
      
      <form name="formPost" id="formPost" class="form-group" method="post" enctype="multipart/form-data">
        <!-- <div class="row"> -->
          <div class="form-group">
            <label for="idtieude" class="h5">Tiêu đề của bài viết:</label>
          <input type="text" id="idtieude" value="<?php $this->page->tieude(); ?>" placeholder="Tiều đề của bài viết" class="form-control" name="tieudenew">
          </div>
          <div class="form-group">
            <label for="editor1" class="h5">Nội dung:</label>
          <textarea class="form-control" name="noidungnew" id="editor1" rows="25" cols="120"><?php $this->page->noidung(); ?></textarea>
          <script>CKEDITOR.replace( 'editor1' );</script>
          </div>
          
        <div class="form-group">
          <h5 class="h5">Hình tin tức</h5>
          <?php
          $this->page->tintuc();
          ?>
          <br>
         <label  for="customFile" class="h5">Chọn hình sửa :</label>
  <input type="file"class="form-control-file"  name="hinhtintucnew"  id="customFile">
          
        </div>

        <div class="form-group">
           <h5 class="h5">Hình đại diện</h5>
  <img src="<?php echo DIR_APP?>views/assets/img/baiviet/baiviet-<?php echo  $_REQUEST['baiviet'] ?>.jpg" class="w-50 h-30" >
          <br>
<label  for="customFile" class="h5">Chọn hình đại diện:</label>
  <input type="file" class="form-control-file"   name="hinhdaidiennew"  id="customFile">
  
        </div>
        <input type="submit" class="btn btn-secondary btn-sm mt-2" name="suabaiviet"  value="Sửa">
      </form>
    </main>
  </div>
</div>


<?php
  include_once 'footer_admin.php';
?>