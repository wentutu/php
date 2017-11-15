<?php 
//截取数组 array_slice
$arr=array(1,3,5,7,10,2,4);
$arr2=array_slice($arr,1,3);
echo "<pre>";
print_r($arr2);
echo "</pre>";

//数组键值合并
$arr=array(1,2,3);
$arr2=array(4,5,6);
$arr3=array_combine($arr,$arr2);
//值合并 但是键相同会覆盖
$arr3=array_merge($arr,$arr2);

//implode数组连接成字符窜返回(join（）一样的)
$str=implode($arr, '-');

//explode字符串拆分成数组
$str='2017-11-14';
$arr3=explode('-',$str);

echo $str;
echo "<pre>";
print_r($arr3);
echo "</pre>";
 ?>