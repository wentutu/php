<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
	//设置客户端字符集为utf-8
$pdo->exec('set names utf8');
$sql="select * from user where id>? and id <?";
//预处理
$smt=$pdo->prepare($sql);
//给预处理绑值
$smt->bindValue(1,2);
$smt->bindValue(2,5);
$smt->execute();
$rows=$smt->fetchAll(PDO::FETCH_NUM);
 echo "<pre>";
 print_r($rows);
  echo "</pre>";
 ?>