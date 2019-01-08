<?php
function ReverseSentence($str){
	$arr=explode(" ",$str);
	$arr=array_reverse($arr);
	return implode(" ",$arr);
}
$str="student. a am I";
$res=ReverseSentence($str);
echo $res;
