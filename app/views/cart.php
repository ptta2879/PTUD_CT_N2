<?php
  include_once 'header.php';
?>

<main>


<div class="container sessionrieng">
  <div class="row">
    <div class="col-12">
      <h1 class="h2 font-weight-normal text-dark mb-3">Giỏ hàng</h1>
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
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1"></label>
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
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2"></label>
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
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck3">
                  <label class="custom-control-label" for="customCheck3"></label>
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


<?php
  include_once 'footer.php';
?>
