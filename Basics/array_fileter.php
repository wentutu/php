<?php 
  //给据回调函数过滤数组
$arr=array(1,2,3,4,5,6,7,8,9,10);
$arr2=array_filter($arr,'even');
function even($val){
	return $val%2==0;
}
function odd($val){
	return $val%2==1;
}
// 数组映射
$arr3=array_map('sf3',$arr);
function sf3($val){
  return $val*$val*$val;
}
$arr3=array_map('add',$arr);
function add($val){
 return ++$val;
}
echo "<per>";
print_r($arr3);
echo "</pre>";
 ?>

