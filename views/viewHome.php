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
     			<img src="views/assets/img/tintuc/'.$row['hinh'].'.png"  class="d-block w-100 rounded" alt="even1">
     			</a></div>';
			}
			else
			{
				echo '<div class="carousel-item">
      <a href="#">
      <img src="views/assets/img/tintuc/'.$row['hinh'].'.png" class="d-block w-100 rounded" alt="even">
      </a>
    </div>';	
			}
		}
	}
}
?>