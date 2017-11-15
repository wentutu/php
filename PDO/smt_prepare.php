<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
	//设置客户端字符集为utf-8
$pdo->exec('set names utf8');
$sql="select count(*) from user";
//预处理
$smt=$pdo->prepare($sql);
$smt->execute();
$rows=$smt->fetchAll(PDO::FETCH_NUM);
echo $rows[0][0];
 ?>

