<?php


function BubbleSort($arr)
{
	$swap = true;
	$j =0;
	//$tmp = null;
	
	while($swap)
	{
		
		$swap = false;
		$j++;
		for($i = 0; $i < ( sizeof($arr) - $j ); $i++)
		{
			if( $arr[$i] > $arr[$i + 1]){
				$tmp = $arr[$i];
				$arr[$i] = $arr[$i + 1];
				$arr[$i + 1] = $tmp;
				$swap = true;
			}
		}
		
	}
	
	return $arr;
	
}

//$array = [2, 3, 4, 5, 1];
$array = [2, 3, 4, -5, 1, -1, 0, 56, 78];

var_dump(BubbleSort($array));

?>