<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
//设置默认fetchAll 为关联数组
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
//设置客户端字符集为utf-8
$pdo->exec('set names utf8');
$sql="select * from user ";
//预处理
$smt=$pdo->prepare($sql);
$smt->execute(); 
$rows=$smt->fetchAll();
echo "<pre>";
print_r($rows);
echo "</pre>";

 ?>
