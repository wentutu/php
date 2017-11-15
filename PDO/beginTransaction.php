<?php 
$pdo =new PDO('mysql:host=localhost;dbname=test','root','1234');
//修改错误提示
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//开启事务
$pdo->beginTransaction();
try {
	//一次操作
$sql="delete from user where id=19";
$smt=$pdo->prepare($sql);
$smt->execute();
//二次操作
$sql="delete form user where id=20";
$smt=$pdo->prepare($sql);
$smt->execute();
//提交
$pdo->commit();
} catch (Exception $e) {
  echo $e->getMessage();
 //撤回
 $pdo->rollBack();
}
 ?>