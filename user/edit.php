<?php 
 include 'mysql.config.php';
 $id=$_GET['id'];
 $sql="select * from user where id={$id}";
 $smt=$pdo->prepare($sql);
 $smt->execute();
 $rows=$smt->fetch();
 ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>修改</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your keywords">
	<meta name="description" content="your description">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<style>
		*{
			font-family:微软雅黑;
		}
	</style>
</head>
<body>
	<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	<div class="container">
		<h1 class="page-header">
		<a href="index.php" class="btn btn-warning" >	查看用户</a>
		<a href="" class="btn btn-primary" >添加用户</a>
	  </h1>		
		<form action="update.php" method="POST">
			<div class="form-group">
				<label for=""> 用户名:</label>
				<input type="text"  class="form-control" name="username" value='<?php 
						echo $rows['username'];
				 ?>'>			
			</div>
			<div class="form-group">
				<label for=""> 密码:</label>
				<input type="text"  class="form-control" name="passwrod" value='<?php 
						echo $rows['passwrod'];
				 ?>'>
				 <input type="hidden"  class="form-control" name="id" value='<?php 
						echo $id;
				 ?>'>	
			</div>
			<div class="form-group">
			<input type="submit" class="btn btn-primary " value="提交">
			<input type="reset" class="btn btn-danger">
			</div>
		</form>
	</div>

</body>
</html>