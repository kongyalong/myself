<?php
//九九乘法表
function getNine(){
	echo '<table border="1" cellpadding="1" cellspacing="0">';
	for($i=1;$i<=9;$i++){
		echo '<tr>';
		for($j=1;$j<=$i;$j++){
			echo '<td>';
			echo $i.'*'.$j.'='.$i*$j;
			echo '</td>';
		}
		echo '</tr>';
	}
	echo "</table>";
}

// getNine();

//杨辉三角
function getYang($n){
	$arr=array();
	for($i=0;$i<$n;$i++){
		for($j=0;$j<$n;$j++){
			if($j==0||$i==$j){
				$arr[$i][$j]=1;
			}else{
				@$arr[$i][$j]=$arr[$i-1][$j]+$arr[$i-1][$j-1];
			}
			if($arr[$i][$j]!=0){
				echo $arr[$i][$j].'&emsp;';
			}
		}
		 echo '<br>';
	}
}
getYang(9);


//水仙花
function getFloor($n){
	$n=intval($n);
	if($n<99||$n>999){
		echo '请输入100 -- 999直接的整数';
		die;
	}
	$gw=intval($n%100%10);//个位
	$sw=intval($n%100/10);//十位
	$bw=intval($n/100);//百位
	$sum=$gw*$gw*$gw+$sw*$sw*$sw+$bw*$bw*$bw;
	if($n==$sum){
		echo $n.'是水仙花数';
	}else{
		echo $n.'不是水仙花数';
	}
}
// getFloor(153);