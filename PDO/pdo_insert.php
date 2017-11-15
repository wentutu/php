<?php 
//链接Oracle
//$pdo=new PDO('oci:dbname=//localhost:1521/test','root','1234');
//链接mysql
$pdo=new PDO('mysql:host=localhost;dbname=test','root','1234');
$pdo->exec('set names utf8');
$sql="insert into user(username,passwrod) values ('user8','123')";
//var_dump($pdo) ;
 echo $pdo->query($sql);

 ?>