<?php 
include 'image.php';
//图片上传并缩率例子
//接受表单传过来的文件
$sfile=$_FILES['img'][tmp_name];
$filesize=$_FILES['img'][size];
$uploaddir='uploads';
//创建日期目录
$year=date('Y');
$month=date('m');
$day=date("d");
$datedir=$uploaddir."/".$year.'-'.$month.'-'.$day;
//判断文件是否存在
if(!file_exists($datedir)){
//存在就创建一个目录
  mkdir($datedir);
}
//把文件名以'.'分割成数组
$farr=explode('.',$_FILES['img']['name']);
//弹出数组的最后一个元素（文件后缀名）
$fext=array_pop($farr);
//生成随机名字前半部分
$frand=time().mt_rand();
//文件目录
 $dfile=$datedir.'/'.$frand.'.'.$fext;
  
 //限制文件上传大小
  $sizes=3*1024*1024;
 //限制文件上传类型
 $allows=array('jpg','png','gif');
 //文件上传移动操作
 if(in_array($fext, $allows)){
 	if($filesize<=$sizes){
 		if(move_uploaded_file($sfile,$dfile)){
 			thumb($dfile,200,200);
 		}
 	}else{
 	echo "<script>alert('文件超过了1M')</script>";
 	}
 }else{
echo "<script>alert('文件类型不允许')</script>";
 }

?>