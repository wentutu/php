<?php 
session_start();
$vauth=$_SESSION[vcode];
$fauth=$_POST['fcode'];
 $vstr=strtolower(str_replace(' ','',$vauth));
 $fstr=strtolower(str_replace(' ','',$fauth));
 $username=$_POST['username'];
 if($vstr===$fstr){
   echo "验证码正确";
 }else{
echo "验证码输入错误";
 }
 ?>
