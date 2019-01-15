<?php
function Combine($arr_A,$arr_B){
	$arr=array_merge($arr_A,$arr_B);
	$count=count($arr);
	for($i=0;$i<$count;$i++){
		for($j=0;$j<$i;$j++){
			if($arr[$j]>$arr[$j+1]){
				list($arr[$j],$arr[$j+1])=array($arr[$j+1],$arr[$j]);
			}
		}	
	}
	return $arr;
}
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];
$arr=Combine($arr_A,$arr_B);
print_r($arr);