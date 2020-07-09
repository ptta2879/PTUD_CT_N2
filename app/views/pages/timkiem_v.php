<?php /**
 * 
 */
class timkiem_v
{
	
	function timkiem()
	{
		$dulieu=$this->data['timkiem'];
		for ($i=0; $i < count($dulieu); $i++) { 
			$row=$dulieu[$i];
			echo '<div class="col-lg-3 col-md-6">

      <a href="chitiet?sanpham='.$row['id'].'">
       <figure class="figure">
        <img src="'.DIR_APP.'views/assets/img/sanpham/baiviet-'.$row['id'].'.jpg" class="figure-img img-fluid hinh" alt="Figure image">
        <figcaption class="figure-caption">
          <p class="h6 mb-0 font-weight-bold text-dark">'.$row['tensp'].'</p>
          <p class="h6 font-weight-normal mb-0 text-dark">'.$row['gia'].'</p>
          
        </figcaption>
      </figure>
      </a>
    </div>
';
		}
	}
} ?>