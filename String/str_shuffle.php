<?php 
   //实现验证码
  // shuffle($str) 打乱字符串的顺序
    //substr($str,-4);截取后4个
  //字符串的截取substr($str,0,4)从0开始截取4个
  $str='01234789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
   echo substr(str_shuffle($str),0,4);
 ?>