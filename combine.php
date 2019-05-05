<?php
$arr1 = array(1,2,3,4,5,6,7,8);//示例数据
$arr2 = array(3,4,5,7,9,10);
echo '<pre>';
print_r(mergeOrderly($arr1,$arr2));//示例
function mergeOrderly($arr1,$arr2){
	if(!count($arr1)){//判断参数是否有意义
		return false;
	}elseif(!count($arr2)){
		return false;
	}else {//进行合并
		$arr = array();//定义最终数组容器
		$arr2Num = count($arr2);//统计数组长度
		$arr1Num = count($arr1);
		$i1 = 0;//数组1 的循环标记
		$i2 = 0;//数组2 的循环标记
		while($i1 < $arr1Num || $i2 < $arr2Num){//是否还需要合并
			if($i1 < $arr1Num && $i2 < $arr2Num){//当两个数组都没有到达末尾，情况一
				if($arr1[$i1] > $arr2[$i2]){//需要比较数组1和数组2，小的放入目标数组，并且标记+1
					$arr[] = $arr2[$i2];
					$i2++;
				}else{
					$arr[] = $arr1[$i1];
					$i1++;
				}
			}elseif($i1 < $arr1Num && $i2 >= $arr2Num){//数组2 已经到达末尾，而数组1还为到达，情况二
					$arr[] = $arr1[$i1];//直接把数组1的内容插入到目标数组中
					$i1++;
			}elseif($i2 < $arr2Num && $i1 >= $arr1Num){//数组1已经到达末尾，而数组2还未到达，情况三
					$arr[] = $arr2[$i2];//直接把数组2的内容插入到目标数组中
					$i2++;
			}
		}
		return $arr;
	}
}
?>