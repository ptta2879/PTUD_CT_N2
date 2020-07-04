<?php
class trangchu_v
{
	function tintuc()
	{
		$dulieu = $this->data["slide"];
		$danhmuc = 'dienthoai';
		for ($i=0;$i<count($dulieu);$i++)
		{
			$row = $dulieu[$i];
			if($i==0)
			{
				echo '
				 <div class="carousel-item active">
       		 		<a href="baiViet?baiviet='.$row['idbaiviet'].'">
         			 <img src="'.DIR_APP.'views/assets/img/tintuc/Tintuc'.$row['id'].'.png"   height="400px" width="100%" class="hinh" alt="even1">
          			</a>
          		</div>';
			}
			else
			{
				echo '<div class="carousel-item">
      <a href="baiViet?baiviet='.$row['idbaiviet'].'">
      <img src="'.DIR_APP.'views/assets/img/tintuc/Tintuc'.$row['id'].'.png" height="400px" width="100%"class="hinh"  alt="even">
      </a>
    </div>';	
			}
		}
	}
	function danhmuc()
	{
		$dulieu = $this->data["danhmuc"];

		for ($i=0; $i < count($dulieu) ; $i++) { 
			$row = $dulieu[$i];
			echo '<a style="text-decoration: none" href="?hang='.$row['id'].'" >
        <img src="'.DIR_APP.'views/assets/img/nhasanxuat/nhasanxuat-'.$row['id'].'.jpg"width="200" height="40" class="img-thumbnail">
        </a>';
		}
	}
	function sanphammoi()
	{
		$dulieu = $this->data["sanphammoi"];
		$danhmuc = 'dienthoai';
		for($i=0;$i<count($dulieu);$i++)
		{
			$row=$dulieu[$i];
			echo'
			<div class="col-lg-3 col-md-6">
      <a href="chitiet?sanpham='.$row['id'].'">
			<figure class="figure">
        <img src="'.DIR_APP.'views/assets/img/sanpham/'.$danhmuc.'/'.$row['tensp'].'_hinhdaidien_'.$row['id'].'.jpg" width="300" height="285" class="figure-img img-fluid hinh" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark text-center">'.$row['tensp'].'</p>
          <p class="h6 font-weight-normal mb-0 text-danger text-center">'.$row['gia'].' VNĐ</p>
          
        </figcaption>
      </figure>
       </a>
    </div>
';
		}
	}

	function sanphambanchay()
	{
		$dulieu = $this->data["sanphambanchay"];
		$danhmuc = 'dienthoai';
		for($i=0;$i<count($dulieu);$i++)
		{
			$row=$dulieu[$i];
			echo '<div class="col-lg-3 col-md-6">
      <a href="chitiet?sanpham='.$row['id'].'">
       <figure class="figure">
        <img src="'.DIR_APP.'views/assets/img/sanpham/'.$danhmuc.'/'.$row['tensp'].'_hinhdaidien_'.$row['id'].'.jpg" width="300" height="285" class="figure-img img-fluid hinh" alt="Figure image">
        <figcaption class="figure-caption">
 <p class="h6 mb-0 font-weight-bold text-dark text-center">'.$row['tensp'].'</p>
          <p class="h6 font-weight-normal mb-0 text-danger text-center">'.$row['gia'].' VNĐ</p>
                  </figcaption>
      </figure>
      </a>
    </div>';
		}
	}
	function tatcasp()
	{
		$dulieu = $this->data["tatcasp"];
		$danhmuc = 'dienthoai';
		for($i=0;$i<count($dulieu);$i++)
		{
			$row=$dulieu[$i];
			echo '<div class="col-lg-3 col-md-6">
      <a href="chitiet?sanpham='.$row['id'].'">
       <figure class="figure">
        <img src="'.DIR_APP.'views/assets/img/sanpham/'.$danhmuc.'/'.$row['tensp'].'_hinhdaidien_'.$row['id'].'.jpg" width="300" height="285" class="figure-img img-fluid hinh" alt="Figure image">
        <figcaption class="figure-caption">
 <p class="h6 mb-0 font-weight-bold text-dark text-center">'.$row['tensp'].'</p>
          <p class="h6 font-weight-normal mb-0 text-danger text-center">'.$row['gia'].' VNĐ</p>
                  </figcaption>
      </figure>
      </a>
    </div>';
		}
	}
	function phantrang()
	{
		$dulieu = $this->data['totalpages'];
		$dulieu1 = $this->data['hang'];
		
		for ($i=1;$i<=$dulieu;$i++)
		{
			echo '
			<li class="page-item"><a class="page-link" href="?hang='.$dulieu1.'&trang='.$i.'">'.$i.'</a></li>
			';
		}
	}
	
}
?>