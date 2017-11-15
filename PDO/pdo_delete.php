<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
$sql="delete from user where id>=10";
echo $pdo->exec($sql);
 ?>