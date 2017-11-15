<?php 
//图片加水印
//水印图片
$src_im=imagecreatefromjpeg('w.jpg');
//被加水印的图片
$dst_im=imagecreatefromjpeg('cs.jpg');

$dst_x=0;
$dst_y=0;
$src_x=0;
$src_y=0;
$src_w=110;//水印图片的宽
$src_h=51;//水印图片的高
imagecopy($dst_im,$src_im,$dst_x,$dst_y,$src_x,$src_y,$src_w,$src_h);
 imagejpeg($dst_im,'w_cs.jpg');
 ?>