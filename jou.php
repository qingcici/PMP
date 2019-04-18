<?php

function str($str){
	if(is_int($str)){
		$data=[];
		$arr=[];
		 $str=str_split($str);
		foreach ($str as $v) {
			
			if($v%2==1){
			 	$data[]=$v;
			}else{
			 	$arr[]=$v;
			}
		}
	}
	$a=array_merge($data,$arr);
	return	$a=implode($a);
}
print_r(str(456789));
