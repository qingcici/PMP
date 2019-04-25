<?php

 $num=153;
  function shui($num){
 	$a=($num/100)%100;
 	$b=($num/10)%10;
 	$c=($num/1)%10;
 	//var_dump($c);die;
 	$a=pow($a, 3);
 	$b=pow($b, 3);
 	$c=pow($c, 3);

 	if($a+$b+$c==$num){
 		echo  '是水仙花';
 	}else{
		echo  '不是水仙花';
 	}

 }

print_r(shui($num));


?>
