<?php 
//数组排序
 $arr=array(100,2,3,1,5,7);
 function getmax($arr){
 for($i=0;$i<count($arr)-1;$i++){
   if($arr[$i]>$arr[$i+1]){
   	 $x=$arr[$i];
   	 $arr[$i]=$arr[$i+1];
   	 $arr[$i+1]=$x;
   }
 }
 return $arr[count($arr)-1];
}
function getmin($arr){
 for($i=0;$i<count($arr)-1;$i++){
   if($arr[$i]<$arr[$i+1]){
   	 $x=$arr[$i];
   	 $arr[$i]=$arr[$i+1];
   	 $arr[$i+1]=$x;
   }
 }
 return $arr[count($arr)-1];
}
echo getmax($arr);
echo "<br>";
 echo getmin($arr);
 ?>