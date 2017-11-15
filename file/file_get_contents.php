<?php 
//读取文件内容
 $file='test.txt';
 //追加写文件
 file_put_contents($file, 'abc',FILE_APPEND);
 $str=file_get_contents($file);
 echo $str;

 ?>