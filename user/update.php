<?php 
include 'mysql.config.php';
$username=$_POST['username'];
$passwrod=$_POST['passwrod'];
$id=$_POST['id'];
$sql="update user set username='{$username}',passwrod='{$passwrod}' where id={$id}";
$smt=$pdo->prepare($sql);

if($smt->execute()){
  echo "<script>location='index.php';</script>";
}else{
  echo "添加失败";
}
 ?>