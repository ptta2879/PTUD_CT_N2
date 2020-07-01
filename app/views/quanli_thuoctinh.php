<?php
  include_once 'header_admin.php';
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
      

    
      <div class="table-responsive">
        <table class="table table-striped table-sm ">
          <thead>
            <tr >
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

      foreach ($this->data as $variable) {
        // print_r($variable); die();
        $stt += 1;
        $checked = '';
        if($variable['trangthai'] == 1){
          $checked = 'checked';
         }
         echo '<tr>
            <form method=post>
            <th scope="row">'.$stt.'</th>
            <td class="align-self-center">'.$variable['mota'].'</td>
            <td>'.$variable['vitri'].'</td>
            <td>
              <div class="custom-control custom-switch">
                <input type="checkbox" '.$checked.' class="custom-control-input" id="'.$variable['id'].'" value="'.$variable['id'].'" name="id">
                <label class="custom-control-label" for="'.$variable['id'].'">Xác nhận</label>
              </div>
            </td>
            <td>
              
              <input type="submit" class="btn btn-sm btn-secondary" name="submit" value="Xác nhận">
            </td>
            </form>
          </tr>';
        
         
      }

       ?>
           <!--  <tr>
              <th scope="row">1</th>
              <td class="align-self-center">England</td>
              <td>English</td>
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Xác nhận</label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xác nhận</a>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              
              <td class="align-self-center">England</td>
              <td>English</td>
            
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch2">
                  <label class="custom-control-label" for="customSwitch2">Xác nhận</label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xác nhận</a>
              </td>
            </tr>

             <tr>
              <th scope="row">3</th>
             
              <td class="align-self-center">England</td>
              <td>English</td>
              
              <td>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch3">
                  <label class="custom-control-label" for="customSwitch3">Xác nhận</label>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-sm btn-secondary ">Xác nhận</a>
              </td>
            </tr> -->
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<?php
  include_once 'footer_admin.php';
?>
