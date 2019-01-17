<?php

function getNum($arr,$n){
	$start=0;
	$end=count($arr)-1;
	$c=floor(($start+$end)/2);
	if($arr[$c]>$n){
		getNum($arr,$n);
	}
	if($arr[$c]==$n){
		return $c;
	}
}

function twoFind($arr,$n){
	$start=0;
	$end=count($arr)-1;
	$c=floor(($start+$end)/2);
	while ($start<$end) {
		if($arr[$c]>$n){
			$end=$c;
			$c=floor(($start+$end)/2);
		}elseif ($arr[$c]<$n) {
			$start=$c;
			$c=floor(($start+$end)/2);
		}else{
			return $c;
		}
	}
}
$arr=[2,4,6,8,11,13];
echo twoFind($arr,2);