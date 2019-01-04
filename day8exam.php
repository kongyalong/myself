<?php
function LastRemaining_Solution($n,$m){
	$num=0;
	for($i=2;$i<=$n;$i++){
		$num=($num+$m)%$i;
	}
	return $num+1;
}
$res=LastRemaining_Solution(10,3);
echo '恭喜编号为'.$res.'的小朋友获得礼物';