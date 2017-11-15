<?php 
include 'mysql.config.php';
$id=$_GET['id'];
$sql="delete from user where id =?";
$smt=$pdo->prepare($sql);
$smt->bindValue(1,$id);
if($smt->execute()==1){
	echo "1秒后返回";
	echo "<script> 
      location='index.php';
	</script>";
}else{
    echo "删除失败";
}
 ?>

