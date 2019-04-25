<?php
class ReverseString{
	public function getReverse($string)
	{
		$arr=explode(' ',$string);
		//var_dump($arr);
		krsort($arr);
		$str=implode(' ', $arr);
		return $str;
	
	}
}
$class=new ReverseString;
$str=$class->getReverse('student. a am I');
print_r($str);