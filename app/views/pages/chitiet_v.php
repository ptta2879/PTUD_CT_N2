<?php /**
 * 
 */
class chitiet_v
{
	
	function soluong()
	{
		$dulieu= $this->data["soluongsp"];
		// for($i=0;$i<count($dulieu);$i++)
		// {
		// 	$row=$dulieu[$i];
		// 	if($row['soluong']>0)
		// 	{
		// 		echo '<h3 class="card-text text-success font-weight-bold">Còn Hàng</h3>';
		// 	}
		// 	else
		// 	{
		// 		echo '<h3 class="card-text text-danger font-weight-bold">Hết Hàng</h3>';
		// 	}
		// }
		if($dulieu > 0){
			echo '<h3 class="card-text text-success font-weight-bold">Còn Hàng</h3>';
		}
		else {
			echo '<h3 class="card-text text-danger font-weight-bold">Hết Hàng</h3>';
		}
		
			
		
		

	}
} ?>