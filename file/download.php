<?php
  $file=$_GET['file'];
  $downfile='imgs/'.$file;
  $filesize=filesize($downfile);
  //内容的类型是二进制流
  header('content-type:application/octet-stream');
  //内容的定位是一个附件
  header("content-disposition:attachment;filename={$file}");
  header("content-length:{$filesize}");
  readfile($downfile);
?>