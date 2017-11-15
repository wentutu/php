
<?php
//链接数据库 
 $pdo=new PDO('mysql:host=localhost;dbname=test','root','1234');
 //sql
$sql="select * from user";
$smt=$pdo->query($sql);
#返回关联数组
$arr=$smt->fetchAll(PDO::FETCH_ASSOC);
#返回索引数组
$arr=$smt->fetchAll(PDO::NUM);
#返回混合数组
$arr=$smt->fetchAll(PDO::BOTH);
#返回对象
$arr=$smt->fetchAll(PDO::FETCH_OBJ);
echo "<pre>";
print_r($arr);
echo "</pre>";
 ?>