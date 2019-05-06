<?php
//有一个X*Y的网格，小团要在此网格上从左上角到右下角，只能走格点且只能向右或向下走。请设计一个算法，计算小团有多少种走法。给定两个正整数int x,int y，请返回小团的走法数目。

class tuan 
{
	
	 function  count($x,$y)
	{
		//11  2   22   6    12  3
		$num=0;
		$arr=[];
		if($x==0&&$y==0){
			return 0;
		}
		if($x==0||$y==0){
			return 1;
		}
		return $this->count($x-1,$y)+$this->count($x,$y-1);
	}
	function main($x,$y){
		$num=$this->count($x,$y);
		return $num;
	}
}
$class=new tuan;
$res=$class->main(3,2);
print_r($res);