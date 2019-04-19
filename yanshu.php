<?php
//$n表示人数，$m表示喊到就要被淘汰的数.圆圈中最后剩下的数。
//约瑟夫环经典问题
class Solu{
	function num($n,$m){
		$num=0;
		for($i=1;$i<=$n;$i++){
			$num=($num+$m)%$i;
		}
		return $num;
		//$this->_num($num,$m);
	}
}
$solu=new Solu();
$result=$solu->num(12,12);
print_r($result);