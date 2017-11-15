<?php 
//去除空格和字符串填补函数
$str='    abc   ';
//去除左侧空格ltrim
$str=ltrim($str);
//去除右侧侧空格ltrim
$str=rtrim($str);
//去除左右空格
$str=trim($str);
echo strlen($str).'----'.$str;
echo "<br>";
//补全字符串
$str="abc";
//echo str_pad($str,10);
 //echo str_pad($str,10,"=");
 //echo str_pad($str,10,"=",STR_PAD_LEFT);
 echo str_pad($str,10,"=",STR_PAD_BOTH);
 echo "<br>";
 //字符串重复
 echo str_repeat("abc",10);
?>