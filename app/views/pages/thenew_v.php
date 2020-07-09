<?php 
/**
  * 
  */
 class thenew_v
 {
 	
 	function thenew()
 	{
 		$dulieu=$this->data['baiviet'];
 		for ($i=0; $i < count($dulieu); $i++) { 
 			$row=$dulieu[$i];
 			echo '<article class="mb-3">
            
            <figure class="figure">
            
              <div class="row">
              <div class="col-md-4">
                <img src="'.DIR_APP.'views/assets/img/baiviet/baiviet-'.$row['id'].'.jpg" width="500" class="figure-img img-fluid" alt="Figure image">
              </div>
              <div class="col-md-8">
                
              <h1><a class="h1 text-dark" href="baiviet?baiviet='.$row['id'].'">'.$row['tieude'].'</a></h1>
              <div class="small">Viết Vào: <time datetime="2017-03-12T10:24">'.$row['ngaydang'].'</time></div>
            
              </div>
            </div>
              </figcaption>

            </figure>
            
          </article>
          <hr>';
 		}
 	}
 } ?>