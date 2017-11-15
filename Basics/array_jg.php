<?php
//从原数组弹出最后一个值返回（arr失去最后一个值）
   $arr=array(1,2,3);
   echo array_pop($arr);
   echo "<br>";

//aaray_push()从数组的最后插入一个值，返回新数组的长度
 echo array_push($arr,4);
  echo "<br>";


//从原数组最前面弹出一个值返回值）
 echo array_shift($arr);
  echo "<br>";

//从数组前面插入一个值
 echo array_unshift($arr,0);
  echo "<br>";

    echo "<pre>";
   print_r($arr);
   echo "</pre>";
  ?>