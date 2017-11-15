<?php 
//开启session技术(不能有输出 放在文件的顶头)
session_start();
 //验证码实现  
//1.准备画布资源
$img=imagecreatetruecolor(150,50);
//2.准备颜色
$black=imagecolorallocate($img,0,0,0);
$white=imagecolorallocate($img,255,255,255);
$red=imagecolorallocate($img,255,0,0);
$green=imagecolorallocate($img,0,255,0);
$blue=imagecolorallocate($img,0,0,255);
$gray=imagecolorallocate($img, 180, 180, 180);
//3.填充画布
imagefill($img, 0, 0, $black);
//4.在画布上画图和文字
  $arr=array_merge(range(0,9),range(a,z),range(A,Z));
  shuffle($arr);
 $str= join(' ',array_slice($arr,0,4));
 //存入SESSION
 $_SESSION['vcode']=$str;
//画文字
 //字体
 $font='C:/Windows/Fonts/cambria.ttc';
//imagestring($img, 5, 40, 20, $str, $white);
imagettftext($img,20,0,20,35,$white,$font,$str);
//干扰素
for($i=0;$i<20;$i++){
 imagearc($img, mt_rand(0,150), mt_rand(0,50), mt_rand(0,150), mt_rand(0,50),mt_rand(0,360), mt_rand(0,360), $gray);
}
//5输出最终图像或保存最终的图像
//在浏览器端输出
  header('content-type:image/png');
 imagepng($img);
 //保存到本地上

 // imagejpeg($img,'wen.jpg');
//6.释放画布资源
imagedestroy($img);



 ?>