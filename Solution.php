<?php
class Ugly{

	function Solution($number){

		while($number % 2 == 0){
			$number /= 2;
		}
		while($number % 3 == 0){
			$number /= 3;
		}
		while($number % 5 == 0){
			$number /= 5;
		}
		if($number==1){
			echo '丑数';
		}
	}
}
$ugly=new Ugly();
$arr=$ugly->Solution(14);
print_r($arr);
