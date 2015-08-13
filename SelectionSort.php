<?php

function SelectionSort($arr)
{
	$n = sizeof($arr);
	for($i = 0; $i < $n; $i++)
	{
		$minIndex = $i;
		for( $j = $i + 1; $j < $n; $j++)
			if( $arr[$j] < $arr[$minIndex] )
				$minIndex = $j;
			
		if($minIndex != $i)
		{
			$tmp = $arr[$i];
			$arr[$i] = $arr[$minIndex];
			$arr[$minIndex] = $tmp;
		}
	}
	
	
	return $arr;
	
	
}

$array = [5, 1, 12, -5, 16, 2, 12, 14];
var_dump(SelectionSort($array));

?>