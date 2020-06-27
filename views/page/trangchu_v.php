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
       		 		<a href="baiViet.php?baiviet='.$row['idbaiviet'].'">
         			 <img src="views/assets/img/tintuc/Tintuc'.$row['id'].'.png"   height="400px" width="100%" class="hinh" alt="even1">
          			</a>
          		</div>';
			}
			else
			{
				echo '<div class="carousel-item">
      <a href="baiViet.php?baiviet='.$row['idbaiviet'].'">
      <img src="views/assets/img/tintuc/Tintuc'.$row['id'].'.png" height="400px" width="100%"class="hinh"  alt="even">
      </a>
    </div>';	
			}
		}
	}
	function danhmuc($dulieu)
	{
		for ($i=0; $i < count($dulieu) ; $i++) { 
			$row = $dulieu[$i];
			echo '<a style="text-decoration: none" href="?hang='.$row['id'].'" >
        <img src="views/assets/img/nhasanxuat/nhasanxuat-'.$row['id'].'-'.$row['idchungloai'].'.jpg"width="200" height="40" class="img-thumbnail">
        </a>';
		}
	}
}
?>