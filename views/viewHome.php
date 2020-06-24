<?php
class viewHome 
{
	function tintuc($dulieu)
	{
		for ($i=0;$i<count($dulieu);$i++)
		{
			$row = $dulieu[$i];
			if($i==0)
			{
				echo '
				 <div class="carousel-item active">
       		 		<a href="#">
         			 <img src="views/assets/img/tintuc/Tintuc'.$row['id'].'.png"   height="400px" width="100%" alt="even1">
          			</a>
          		</div>';
			}
			else
			{
				echo '<div class="carousel-item">
      <a href="#">
      <img src="views/assets/img/tintuc/Tintuc'.$row['id'].'.png" height="400px" width="100%"  alt="even">
      </a>
    </div>';	
			}
		}
	}
}
?>