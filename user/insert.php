<?php 
include 'mysql.config.php';
$username=$_POST['username'];
$passwrod=$_POST['passwrod'];
$sql="insert into user(username,passwrod) values('${username}','{$passwrod}')";
$smt=$pdo->prepare($sql);

if($smt->execute()){
  echo "<script>location='index.php';</script>";
}else{
  echo "添加失败";
}
 
 ?>