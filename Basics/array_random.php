<?php
//随机获取一个数组的元素
  $arr=array(
	'name' =>'user',
	'age'=>'20',
	'sex'=>'nan'
  	 );
 function getrand($arr){
 	
 	foreach ($arr as $key => $val){
 		$arr2[]= $val;
 		$tot++;
 	}
 	$index =mt_rand(0,$tot-1);
 	return $arr2[$index];
 }
 echo getrand($arr);
?>