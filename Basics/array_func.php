<?php
//数组函数
$arr=array (
	'name'=>'user',
	'age'=>'20',
	'sex'=>'nan'
	
	 );
foreach($arr as $key=>$val){
$arr2[]=$key;
}
echo "<pre>";
print_r($arr2);
echo "<pre>";
?>