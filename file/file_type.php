<?php 
 $file='../img/cs.jpg';
 //filetype()测试文件或目录
var_dump(filetype($file));
//is_dir();判断是否是目录
var_dump(is_dir($file));
//is_file();判断是否是文件
var_dump(is_file($file));
//file_exists();文件或目录是否存在
var_dump(file_exists($file));
//filesize();文件大小或目录大小
 $size= filesize($file);
 echo $size;
 ?>