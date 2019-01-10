<?php
function Add($num1,$num2){
	$arr[]=$num1;
	$arr[]=$num2;
	return array_sum($arr);
}

echo Add(5,5);