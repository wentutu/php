<?php 
//数组排序(所有的排序方法都会改变原数组)
 $arr=array(4,6,2,3,1,5,7);
 //升排序
sort($arr);
//降序
rsort($arr);

// msort自定义多数组排序(按value长度排序)
$arr=array(
   'aaaaaaaaaaaaaaaaaaa',
   'bbbbbbbbb',
   'c',
   'ddddddddddddddddddddddddddddddd'
	);

/*
 array_multisort($arr1,$arr)
 按小数组的升序排序
*/
 foreach ($arr as $key => $value) {
 	$arr2[]=strlen($value);
 }
array_multisort($arr2,$arr);
/*function msort(&$arr){
  foreach($arr as $val){
    $arr2[strlen($val)]=$val;
  }
  ksort($arr2);
  $arr=$arr2;
}
msort($arr);*/

echo "<pre>";
print_r($arr);
echo "</pre>";

 ?>