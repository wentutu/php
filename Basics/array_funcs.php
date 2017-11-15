<?php 
 $arr=array(
 	'name'=>'user',
 	'age'=>'30',
 	'sex'=>'nan',
 	's'=>'nan'

 	);
 //获取一个数组的值
 $arr2=array_values($arr);
 //获取一个数组的ekey
 $arr2=array_keys($arr);
 //判断一个值在不在数组中
 var_dump(in_array('user', $arr));
 $file='doc';
 $allow=array('gif','jpg','png');
 if(!in_array($file, $allow)){
  echo "该文件类型不允许上传";
 }else{
 	echo "文件上传成功";
 }
  //判断一个键在不在数组中
 var_dump(array_key_exists('username',$arr));
 //键值对调
 $arr2=array_flip($arr);
//值翻转
 $arr2=array_reverse($arr);
 //统计数组的个数
 echo count($arr);
 //统计数组中值出现的次数
 $arr2=array_count_values($arr);
 //删除数组中重复值
 $arr2=array_unique($arr);
 echo "<pre>";
 print_r($arr2);
 echo "<pre>";
 ?>