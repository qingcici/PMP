<?php
//输出重复次数最多的首次出现的字符
$string = "Have you ever gone shopping and";
function first($string){
	$data=[];
	$len=strlen($string);
	for($i=0;$i<$len;$i++){
		if(isset($data[$string[$i]])){
			$data[$string[$i]]++;	
		}else{
			$data[$string[$i]]=1;
		}

		if($data[$string[$i]]>=3){
			return $string[$i];
		}
	}
	return $res;
}
print_r(first($string)) ;
//     function  calFirst($string)
//     {
//         $len = strlen($string);
//         $arr = [];
//         for($i=0;$i<$len;$i++){
//             if(isset($arr[$string[$i]]))
//             {
//                 $arr[$string[$i]]++;
//             }
//             else
//             {
//                 $arr[$string[$i]]= 1;
//             }
//             if( $arr[$string[$i]] >= 3)
//             {
//                 return $string[$i];
//             }
//         }
//         return $res;
//     }
// print_r(calFirst($string));
?>