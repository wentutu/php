<?php
//统计数据中所有值出现的次数
$arr=array(1,2,3,1,5,7,2,3,1,2,1,2,1,1);
foreach ($arr as $val) {
	$arr2[$val]++;
}
echo "<pre>";
print_r($arr2);
echo "</pre>";
  ?>