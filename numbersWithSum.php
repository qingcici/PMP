<?php
//输入一个递增排序的数组和一个数字S，在数组中查找两个数，使得他们的和正好是S，如果有多对数字的和等于S，输出两个数的乘积最小的。
class NumbersWithSum
{
		function getNum(){
			ArrayList<Integer> list = new ArrayList<Integer>();
		// 先判断特殊情况：数字少于两个时
		if (array.length < 2 || array == null) {
			return list;
		}
		// 获取数组的长度
		int len = array.length;
		int start = 0;
		int end = len - 1;
		while (start < end && start < len - 1 && end > 0) {
			if (array[start] + array[end] == sum) {
				list.add(array[start]);
				list.add(array[end]);
				return list;
				
			}
			if (array[start] + array[end] > sum) {
				end--;
			}
			if (array[start] + array[end] < sum) {
				start++;
			}
		}
		return list;
	}
}
$class=new NumbersWithSum;
$res=$class->getNum();
print_r($res);