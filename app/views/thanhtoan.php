<?php
 include_once 'header.php';


// print_r($this->data); die();
 if(empty($this->data)) {
 	echo '<script type="text/javascript">window.location="giohang"</script>';
 }
?>


<main>
	<div class="container sessionrieng">
		<h1 class="h1 text-secondary">Thanh toán</h1>
		<?php if(isset($this->message)) { echo $this->message;} ?>
		<div class="row mt-2">
			<div class="col-7">
				<form class="needs-validation" novalidate method="post">
				  <div class="form-row">
				    <div class="col-md-4 mb-3">
				      <label for="validationCustom01">Họ tên đệm</label>
				      <input type="text" class="form-control" id="validationCustom01" name="hotendem"  required>
				     <!--  <div class="valid-feedback">
				        Looks good!
				      </div> -->
				    </div>
				    <div class="col-md-4 mb-3">
				      <label for="validationCustom02">Tên</label>
				      <input type="text" class="form-control" id="validationCustom02" name="ten" required>
				      <!-- <div class="valid-feedback">
				        Looks good!
				      </div> -->
				    </div>
				    <div class="col-md-4 mb-3">
				      <label for="validationCustom02">Số điện thoại</label>
				      <input type="text" class="form-control" id="validationCustom02" name="sdt" required>
				     <!--  <div class="valid-feedback">
				        Looks good!
				      </div> -->
				    </div>
				   
				  </div>
				  <div class="form-row">
				    <div class="col-md-12 mb-3">
				      <label for="validationCustom03">Địa chỉ</label>
				      <input type="text" class="form-control" id="validationCustom03" name="diachi" required>
				      <div class="invalid-feedback">
				        Vui lòng điền địa chỉ nhận hàng
				      </div>
				    </div>
				  
				  </div>
				
				   <div class="custom-control custom-radio">
				    <input type="radio" class="custom-control-input" id="customControlValidation2" name="loaithanhtoan" required checked value="offline">
				    <label class="custom-control-label" for="customControlValidation2">Thanh toán khi nhận hàng</label>
				  </div>
				  <div class="custom-control custom-radio mb-3">
				    <input type="radio" class="custom-control-input" id="customControlValidation3" name="loaithanhtoan" value="online">
				    <label class="custom-control-label" for="customControlValidation3">Thanh toán online</label>

				     	<div class="form-group mt-3">
	                        <label for="order_desc">Nội dung thanh toán</label>
	                        <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2"><?php echo $this->noidung ?></textarea>
	                    </div>
	                    <div class="form-group">
	                        <label for="bank_code">Ngân hàng</label>
	                        <select name="bank_code" id="bank_code" class="form-control">
	                            <option value="">Không chọn</option>
	                            <option value="NCB"> Ngan hang NCB</option>
	                            <option value="AGRIBANK"> Ngan hang Agribank</option>
	                            <option value="SCB"> Ngan hang SCB</option>
	                            <option value="SACOMBANK">Ngan hang SacomBank</option>
	                            <option value="EXIMBANK"> Ngan hang EximBank</option>
	                            <option value="MSBANK"> Ngan hang MSBANK</option>
	                            <option value="NAMABANK"> Ngan hang NamABank</option>
	                            <option value="VNMART"> Vi dien tu VnMart</option>
	                            <option value="VIETINBANK">Ngan hang Vietinbank</option>
	                            <option value="VIETCOMBANK"> Ngan hang VCB</option>
	                            <option value="HDBANK">Ngan hang HDBank</option>
	                            <option value="DONGABANK"> Ngan hang Dong A</option>
	                            <option value="TPBANK"> Ngân hàng TPBank</option>
	                            <option value="OJB"> Ngân hàng OceanBank</option>
	                            <option value="BIDV"> Ngân hàng BIDV</option>
	                            <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
	                            <option value="VPBANK"> Ngan hang VPBank</option>
	                            <option value="MBBANK"> Ngan hang MBBank</option>
	                            <option value="ACB"> Ngan hang ACB</option>
	                            <option value="OCB"> Ngan hang OCB</option>
	                            <option value="IVB"> Ngan hang IVB</option>
	                            <option value="VISA"> Thanh toan qua VISA/MASTER</option>
	                        </select>
	                    </div>
				  
				  </div>

				<button class="btn btn-success" type="submit" name="thanhtoan">Thanh toán</button>
				</form>

				
			</div>
			<div class="col-5">
				<div class="table-responsive">
					<table class="table table-sm mt-5">
			          <thead class="thead-light">
			            <tr>
			              <!-- <th scope="col">STT</th>
			              <th scope="col">Hình</th> -->
			              <th scope="col">Tên</th>
			              <th scope="col">Số lượng</th>
			              <th scope="col">Tổng</th>
			            </tr>
			          </thead>
			          <tbody>
			            <?php 
			              $stt = 0;
			              $tong = 0;
			              foreach ($this->data as $value) {
			                $stt+=1;
			                $tong += $value['soluong']*$value['gia'];

			                // echo '<tr><th scope="row">'.$stt.'</th>';
			                // echo '<td>English</td>';
			                echo '<td>'.$value['tensp'].'</td>';
			                echo '<td>
			                      '.$value['soluong'].'
			                      </td>';
			                echo '<td>'.$value['soluong']*$value['gia'].'</td></tr>';
			        
			            }
			             ?>
			           
			          </tbody>
			        </table>

			        <table class="table table-bordered">
				      <tbody>
				        <tr>
				          <th class="font-weight-bolder text-danger" scope="row">Tổng tiền</th>
				          <td class="font-weight-bold text-danger"><?php echo $this->tongtien ?>VND</td>
				        </tr>
				      
				      </tbody>
				      </table>
				</div>
			</div>
		</div>

	</div>



</main>

<?php
	include_once 'footer.php';
?>


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>