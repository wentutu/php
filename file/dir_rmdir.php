<?php 
  //创建目录
$sfile='../img/cs.jpg';
$dfile='imgs/cs.jpg';
//文件移动
//copy($sfile, $dfile);
//unlink($sfile);
$dir='imgs';
//mkdir($dir);
//删除目录(不能删除非空目录)
rmdir($dir);
 ?>