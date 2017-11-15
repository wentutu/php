<?php 
 //获取请求参数
function get(){
 	$query=$_SERVER['QUERY_STRING'];
 	$arr=explode('&',$query);
 	foreach($arr as $val){
 		$arr2=explode('=',$val);
 		$arr3[$arr2[0]]=$arr2[1];
 	}
   return $arr3;
}
$_WTG=get();
echo "<pre>";
print_r($_WTG);
echo "</pre>";
 ?>