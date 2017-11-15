<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
	//设置客户端字符集为utf-8
$pdo->exec('set names utf8');
$sql="insert into user(username,passwrod) values('user70','777')";
//预处理
$smt=$pdo->prepare($sql);
if($smt->execute()){
	$lastid=$pdo->lastInsertId();
	echo '刚刚插入数据编号是'.$lastid;
}

 ?>

