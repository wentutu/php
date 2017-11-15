<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
$sql="update user set passwrod='456' where id=9";
echo $pdo->exec($sql);
 ?>