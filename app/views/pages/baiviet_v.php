<?php /**
 * 
 */
class baiviet_v
{

	function baiviet()
	{
		$dulieu=$this->data['baiviet'];
		for ($i=0; $i < count($dulieu); $i++) { 
			$row=$dulieu[$i];
			echo '<article class="mb-3">
            <header class="mb-2">
              <h1 class="h1 text-dark">'.$row['tieude'].'</h1>
              <div class="small">Viết Vào: <time datetime="2017-03-12T10:24">'.$row['ngaydang'].'</time></div>
            </header>
            <figure class="figure">
              <img src="'.DIR_APP.'views/assets/img/baiviet/baiviet-'.$row['id'].'.jpg" class="figure-img img-fluid"  alt="Figure image">
              
            </figure>
            '.$row['noidung'].'
            <a href="tintuc">« Back</a>
          </article>
          <hr>';
		}
	}
} ?>