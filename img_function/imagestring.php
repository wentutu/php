<?php 
//矩形干扰素
  //php中创建图像的6个步骤
//1.准备画布资源
$img=imagecreatetruecolor(500,300);
//2.准备颜色
$black=imagecolorallocate($img,0,0,0);
$white=imagecolorallocate($img,255,255,255);
$red=imagecolorallocate($img,255,0,0);
$green=imagecolorallocate($img,0,255,0);
$blue=imagecolorallocate($img,0,0,255);
//3.填充画布
imagefill($img, 0, 0, $black);
//4.在画布上画图和文字
imagefilledarc($img, 250, 150, 200, 200, 0, 90, $white, IMG_ARC_PIE);
imagefilledarc($img, 250, 150, 200, 200, 90, 230, $blue, IMG_ARC_PIE);
imagefilledarc($img, 250, 150, 200, 200, 230, 360, $green, IMG_ARC_PIE);
//画文字
/*imagestring($img, 5, 280, 190, '30%', $black);
imagestring($img, 5, 190, 150, '70%', $black);
imagestring($img, 5, 270, 100, '50%', $black);*/
 imagettftext($img,20,0,270,200,$black,'ms.ttf','30%');
 imagettftext($img,20,0,170,180,$black,'ms.ttf','30%');
 imagettftext($img,20,0,250,100,$black,'ms.ttf','30%');

//5输出最终图像或保存最终的图像
//在浏览器端输出
  header('content-type:image/png');
 imagepng($img);
 //保存到本地上
  // imagejpeg($img,'wen.jpg');
//6.释放画布资源
imagedestroy($img);

 ?>

