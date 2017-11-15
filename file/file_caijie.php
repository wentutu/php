<?php 
//标题采集
$url='http://www.163.com';

$str=file_get_contents($url);
//编码转换
$str2=iconv('gb2312','utf-8',$str);
echo preg_match('/<title>(.+)<\/title>/s',$str,$ms);
echo "网站标题：{$ms[1]}";

 ?>