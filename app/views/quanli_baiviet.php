<?php
  include_once 'header_admin.php';
  if($_SESSION['phanquyen']==2)
  {

    echo'<script type="text/javascript">alert("Bạn không có quyền thực hiện chức năng này");window.location="admin"</script>';
    
  }
?>

<div class="container-fluid">
  <div class="row">
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Quản lí bài viết</h1>
      <?php if(isset($this->message)){echo $this->message;} ?>
      <form>
          <div class="input-group">
  <select name="selectbaiviet" class="custom-select" id="inputGroupSelect04">
    <option selected="" value="1">Bài viết</option>
    <option value="2">Tin tức</option>
    
  </select>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary"   type="submit">Lọc</button>

  </div>
</div>
        </form>
    </div>
    

<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class=" h5">Mã tin tức:</label>
            <input type="text" class="form-control" name="matintuc" id="matintuc">
          </div>
          <div class="form-group">
            <label for="message-text" class=" h5">Vị trí:</label>
            <input type="number" min="0" max="3" class="form-control"  name="vitri" >
          </div>
          <div class="form-group">
            <label for="recipient-name" class=" h5">Chọn hình cần thay đổi:</label>
            <input type="file" class="form-control" name="hinhthaidoi" >
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" name="capnhatvitri" class="btn btn-primary">Lưu</button>
      </div>
      </form>
    </div>
  </div>

</div>
    <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->
    <a class="btn btn-secondary btn-sm mb-4 " href="thembaiviet" role="button">Thêm bài viết mới</a>
    <!-- <h2>Section title</h2> -->
    <div class="table-responsive">

    <table class="table text-center">
        <thead class="thead-light">
<?php if (isset($_REQUEST['selectbaiviet'])) {
            $selectbaiviet=$_REQUEST['selectbaiviet'];
          }
          else {
            $selectbaiviet=1;
          } 
          switch ($selectbaiviet) {
              case 1:
                {
                  $this->page->hienbaiviet();    
                  break;
                }
                case 2:
                {
                  $this->page->tintuc();
                  break;
                }

            }

          ?>
          
       
          
          
         
        
  </div>
  </main>
</div>
</div>

<?php
  include_once 'footer_admin.php';
?>
<script type="text/javascript">$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Vi tri moi' + recipient)
  modal.find('.modal-body #matintuc').val(recipient)
})</script>

