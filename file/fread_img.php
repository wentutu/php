<?php 
//读取图片的内容
header('content-type:image/jpeg');
$file='../img/cs.jpg';
$fr=fopen($file, 'r');
echo fread($fr, filesize($file));
file($fr);
 ?>