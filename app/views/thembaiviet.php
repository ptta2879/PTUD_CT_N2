<?php
  require_once 'header_admin.php';
?>

<script type="text/javascript" src="<?php echo DIR_APP ?>views/assets/ckeditor/ckeditor.js"></script>


<div class="container-fluid">
  <div class="row">

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Sửa bài viết</h1>
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
      
      <form name="formPost" id="formPost" method="post" enctype="multipart/form-data">
        <!-- <div class="row"> -->
          <textarea name="editor1" id="editor1" rows="25" cols="120">Hãy viết bài mới ở đây nhé.</textarea>
          <script>CKEDITOR.replace( 'editor1' );</script>
        <!-- </div> -->
        <input type="submit" class="btn btn-secondary btn-sm mt-2" name="login" id="login" value="Lưu">
      </form>
    </main>
  </div>
</div>


<?php
  include_once 'footer_admin.php';
?>