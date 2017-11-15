<?php 
//用引用实现原数组的累加
$arr=array(1,2,3);
foreach($arr as &$val){
  $val++;

}
foreach($arr as $key=>$val){
  $val=&$arr[$key];

}
 echo "<pre>";
 print_r($arr);
 echo "<pre>";
 ?>
