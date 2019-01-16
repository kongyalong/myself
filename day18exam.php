<?php
function NumberOf1($n){
	$res=decbin($n);
	// print_r($res);die;
	$count=strlen($res);
	$c=0;
	for($i=0;$i<$count;$i++){
		if($res[$i]==1){
			$c++;
		}
	}
	return $c;
}
$n=10;
print_r(NumberOf1($n));