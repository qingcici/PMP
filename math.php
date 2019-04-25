<?php
//1+2+3+...+n，要求不能使用乘除法、for、while、if、else、switch、case等关键字及条件判断语句（A?B:C）。（提示逻辑运算）
class Math{
	public function getSolution($num){
		var_dump(range(0,$num));
		$res=array_sum(range(1,$num));
			return $res;
	}
}
$class=new Math;
$res=$class->getSolution(5);
print_r($res);