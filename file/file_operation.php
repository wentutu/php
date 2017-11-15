<?php 
 $file='../img/t_cs.jpg';
 $dfile='../img/cs1.jpg';
//1.删除文件
// unlink($file);
//2.文件复制
 //copy($file, $dfile);
 //3.文件重命名
// rename($file, $dfile);
//4.打开文件fopen($file,)r读 r+ w w+ a a+
 $f='test.txt';
  
  //fwrite()写入文件
  $fw=fopen($f,'a');//w 清空写 a追加写
  fwrite($fw, 'abc');
  //关闭资源
  fclose( $fw);
  $fr=fopen($f,'r');
  //fread()读取文件内容
  echo fread($fr,filesize($f));
   fclose( $fr);
 ?>