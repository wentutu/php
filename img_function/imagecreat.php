<?php 
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
imagefill($img,0,0,$black);
//4.在画布上画图和文字
//画一个圆
   imagefilledellipse($img, 250, 150, 150, 150, $white);

//5输出最终图像或保存最终的图像
//在浏览器端输出
 header('content-type:image/jpeg');
 imagejpeg($img);
 //保存到本地上
  // imagejpeg($img,'wen.jpg');
//6.释放画布资源
imagedestroy($img);

 ?>
</body>

