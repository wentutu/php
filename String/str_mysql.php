<?php 
// addslashes 把单双引号转义
//把特殊符号转实体
// htmlspecialchars_decode()把实体转为html
  $info=  addslashes(htmlspecialchars($_POST['info']));
   // 操作数据库
  $pdo=new PDO('mysql:host=localhost;dbname=test','root','1234');
   //防止乱码
   $pdo->exec('set anems utf8');
    $sql="insert into mess(info) values ('{$info}')";
   if($pdo->exec($sql)){
   	 echo "留言成功";
   }else{
     echo "留言失败";
   }
    
 ?>