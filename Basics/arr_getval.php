<?php 
//获取数组中的唯一值
 $arr=array(1,2,3,1,5,7,2,3,1,2,1,2,1,1);
foreach ($arr as $val) {
	$arr2[$val]=$val;
}
echo "<pre>";
print_r($arr2);
echo "</pre>";
 ?>