<?php 
//其他有用的处理函数
$arr=array(1,2,3,4,5);
//从数组中随机去除一个键
$index=array_rand($arr);
echo $index;
echo "<br>";
//把原数组打乱(随机抽奖)
shuffle($arr);
$arr2=array_slice($arr,0,2);

//数组求和
echo array_sum($arr);
echo "<br>";

//求乘机
echo array_product($arr);
echo "<br>";
//生成一个区间的数组(验证码实现)
$arr=range(0,9);
$arr1=range(a,z);
$arr2=range(A,Z);
$arr3=array_merge($arr,$arr1,$arr2);
shuffle($arr3);
$arr4=array_slice($arr3,0,4);
$str=join($arr4,'');
echo $str;
echo "<br>";

//变量\数组的删除
unset($arr2[1]);
unset($arr2);

echo "<pre>";
print_r($arr2);
echo "</pre>";
?>