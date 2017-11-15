<?php 
//开启session（session之前不能有输出）
session_start();
//设置session
  $_SESSION['username']='user1';
  $_SESSION['id']=1;
  $_SESSION['password']='123';
  //删除session 
  //1开启session  session_start();
  //2 清空session数组
  $_SESSION=array();
  //3删除客户端session文件
   setcookie('PHPSESSID','' time()-1,'/');
  //4删除服务器上session文件
   session_destroy();
  //查询session
 echo "<pre>";
 print_r($_SESSION);
 echo "</pre>";
 ?>