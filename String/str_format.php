<?php 
//数字货币格式化
  $str='12345688';
  echo number_format($str);
  echo "<br>";
  //0表示小数点 -表表示要修改的样式
   echo number_format($str,0,'','-');
    echo "<br>";
   //实现number_format($str,$str1)$str1分割符
   function format($str,$str1){
       $str=strrev($str);
       //按个数分割字符串
       $arr=str_split($str,3);
       //以，号的形式转化为字符串
       $str2=join($str1,$arr);
       return strrev($str2); 
   }
  echo format($str,'-');
 ?>