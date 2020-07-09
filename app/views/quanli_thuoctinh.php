<?php
  include_once 'header_admin.php';
  if($_SESSION['phanquyen']==1)
  {

    echo'<script type="text/javascript">alert("Bạn không có quyền thực hiện chức năng này");window.location="admin"</script>';
    
  }
?>

<div class="container-fluid">
  <div class="row">
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Quản lí thuộc tính</h1>
        <?php if(isset($this->message)) { echo $this->message; }?>
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
      <button type="button" class="btn btn-secondary btn-sm mb-4" data-toggle="modal" data-target="#exampleModal1">Thêm thuộc tính mới</button>

       <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <form method="post">
            <div class="modal-body">
              
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Tên thuộc tính</label>
                  <input type="text" class="form-control" id="recipient-name" name="tenthuoctinh">
                </div>
                <div class="input-group mb-3">
                  <select class="custom-select" id="inputGroupSelect02" name="type">
                    <option selected>Kiểu dữ liệu</option>
                    <option value="int">Int</option>
                    <option value="varchar(255)">Varchar</option>
                    <option value="float">Float</option>
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary btn-sm" type="button">Chọn</button>
                  </div>
                 
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              <button type="submit" name="themthuoctinh" class="btn btn-success btn-sm">Xác nhận</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!-- <h2>Section title</h2> -->
      <!-- <div>
        <a href="#" class="btn btn-sm btn-secondary ">Thêm</a>
      </div> -->


    
      
      <div class="table-responsive mb-5">
      
        <table class="table table-sm table-hover">
          <h1 class="h4">Quản lí thuộc tính trang chi tiết</h1>
          <thead>
            <tr class="table-secondary">
              <th scope="col">STT</th>
              <th scope="col">Tên</th>
              <th scope="col">Vị trí
              </th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Xác nhận</th>
            </tr>
          </thead>
          <tbody >
            <?php 

      $stt = 0;
      foreach ($this->data as $variable) {
        // print_r($variable); die();
        $stt +=1;
        $checked = '';
        if($variable['trangthai'] == 1){
          $checked = 'checked';
         }
         echo '<tr>
            <form method="post">
            <th class="align-middle" scope="row">'.$stt.'</th>
            <td class="align-middle" width="20%">'.$variable['mota'].'</td>
            <td class="align-middle">
            <div class="input-group m-1" style="width: 60%;">
                  <select  class="custom-select" id="inputGroupSelect03" name="vitri">
            ';
        // if($checked) {
          for ($i=0 ; $i<=5; $i++) {
                    // $val = $i.'_'.$variable['id'];
                    // print_r($val); die();
                    if($variable['vitri'] == $i) {
                      echo '<option value="'.$variable['vitri'].'" selected>'.$variable['vitri'].'</option>';
                    } else {
                      echo '<option value="'.$i.'" >'.$i.'</option>';
                    }
                  }
        // }  


        echo'</select>
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary btn-sm" type="button">Chọn</button>
                </div>
              </div>
            </td>
            <td class="align-middle">
              <div class="custom-control custom-switch">
                <input type="hidden" name="id" value="'.$variable['id'].'">
                <input type="hidden" name="check_list" value="0">
                <input type="checkbox" '.$checked.' class="custom-control-input" id="'.$variable['id'].'" value="1" name="check_list">
                <label class="custom-control-label" for="'.$variable['id'].'">Xác nhận</label>
              </div>
            </td>
            <td class="align-middle">
              
                <input type="submit" class="btn btn-sm btn-secondary" name="submit" value="Cập nhật">
             
            </td>
            
          </tr>
          </form>';
        
         
      }

       ?>    
          </tbody>

        </table>
        
      </div>
     



      
      
      <div class="table-responsive">
      
        <table class="table table-hover table-sm ">
          <h1 class="h4">Quản lí thuộc tính trang chủ</h1>
          <thead>
            <tr class="table-secondary">
              <th scope="col">STT</th>
              <th scope="col">Tên</th>
              <th scope="col">Vị trí</th>
              <th scope="col">Trạng thái</th>
              <th scope="col">Xác nhận</th>
            </tr>
          </thead>
          <tbody >
            <?php 
      $stt = 0;

      foreach ($this->thuoctinhhome as $variable) {
        // print_r($variable); die();
        $stt += 1;
        $checked = '';
        if($variable['trangthai'] == 1){
          $checked = 'checked';
         }
         echo '<tr>
            <form method="post">
            <th class="align-middle" scope="row">'.$stt.'</th>
            <td class="align-middle" style="width: 20%;">'.$variable['mota'].'</td>
            <td class="align-middle">
            <div class="input-group m-1 " style="width: 60%;">
                  <select  class="custom-select" id="inputGroupSelect03" name="vitrihome">';

            // if($checked) {
                  for ($i=0 ; $i<=2; $i++) {
                    if($variable['vitri'] == $i) {
                      echo '<option value="'.$variable['vitri'].'" selected>'.$variable['vitri'].'</option>';
                    } else {
                      echo '<option value="'.$i.'" >'.$i.'</option>';
                    }
                  }
            // }
            echo '
                  </select>
                  <div class="input-group-append">
                    <button class="btn btn-outline-secondary btn-sm" type="button">Chọn</button>
                  </div>
                 
                </div>

            </td>
            <td class="align-middle">
              <div class="custom-control custom-switch">
                <input type="hidden" name="id" value="'.$variable['id'].'">
                <input type="hidden" name="check" value="0" id="testNameHidden">
                <input type="checkbox" '.$checked.' class="custom-control-input" id="'.$variable['id'].'" value="1" name="check" id="testName">
                
                
                <label class="custom-control-label" for="'.$variable['id'].'">Xác nhận</label>
              </div>
            </td>
            <td class="align-middle">
             <div class="d-flex justify-align-center ">
          <input type="submit" class="btn btn-sm btn-secondary" name="thuoctinhhome" value="Cập nhật">
          </div>

            </td>
            
           </form>
          </tr>';
        
         
      }

       ?>    
          </tbody>

        </table>
       <!--  <div class="d-flex justify-content-end mb-5">
          <input type="submit" class="btn btn-sm btn-secondary" name="thuoctinhhome" value="Cập nhật">
          </div> -->
      </div>
      
    </main>
  </div>
</div>


<?php
  include_once 'footer_admin.php';
?>
<!-- <script type="text/javascript">
  if(document.getElementById("testName").checked) {
    document.getElementById('testNameHidden').disabled = true;
}

// <input type="checkbox" '.$checked.' class="custom-control-input" id="'.$variable['id'].'" value="1" name="check[]" id="testName">
// <input type="hidden" name="check[]" value="0" id="testNameHidden">
</script> -->
<!-- <input type="hidden" name="checkboxName[]" value="0"><input type="checkbox" onclick="this.previousElementSibling.value=1-this.previousElementSibling.value"> -->