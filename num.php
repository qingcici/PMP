<?php
//写一个函数，求两个整数之和，要求在函数体内不得使用+、-、*、/四则运算符号。
class Num{
	function addNum($num1,$num2){

			$arr=[$num1,$num2];
			$sum=array_sum($arr);
			return $sum;
	}
}
$class=new Num;
$res=$class->addNum(5,6);
print_r($res);