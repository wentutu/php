<?php 
  	//图片缩放
 function thumb($src_file,$dst_w,$dst_h){
	$srcarr=getimagesize($src_file);
		//变量函数
		//$srcarr[2],文件类型
	switch ($srcarr[2]) {
			case '1':
				$imagecreatefrom="imagecreatefromgif";
				$imageout="imagegif";
				break;
			
			case '2':
				$imagecreatefrom="imagecreatefromjpeg";
				$imageout="imagejpeg";
				break;

			case '3':
				$imagecreatefrom="imagecreatefrompng";
				$imageout="imagepng";
				break;
		}
		//获取图片资源
 		$src_image=$imagecreatefrom($src_file);
		
	    //等比例计算真实目标资源的宽高
		$src_w=imagesx($src_image);
		$src_h=imagesy($src_image);
		//按比例大的来缩放
		$scale=($src_w/$dst_w)>($src_h/$dst_h)?($src_w/$dst_w):($src_h/$dst_h);
		//取小不取大
		$dst_w=floor($src_w/$scale);
		$dst_h=floor($src_h/$scale);
		$dst_x=0;
		$dst_y=0;
		$src_x=0;
		$src_y=0;
    $dst_image=imagecreatetruecolor($dst_w, $dst_h);
 	imagecopyresampled($dst_image,$src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
 	$t_name='/t_'.$dst_w.'_'.basename($src_file);
 	$t_dir=dirname($src_file);
 	//文件存放的路劲
 	$s_file=$t_dir.$t_name;
 	//文件输出类型
 	$imageout($dst_image,$s_file);
 }
  
 ?>