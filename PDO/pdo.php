<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$pdo->exec('set names utf8');
$sql="select * from user";
$smt=$pdo->prepare($sql);
$smt->execute();
$rows=$smt->fetchAll();
echo "<pre>";
print_r($rows);
echo "</pre>";

 ?>