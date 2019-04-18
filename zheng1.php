<?php
function calFn($n,$m){
	$num=0;
	for ($i=$n; $i <= $m ; $i++) { 
		$data= substr_count($i,1);
		$num+=$data;
	}
	return $num;
}
print_r(calFn(1,13));