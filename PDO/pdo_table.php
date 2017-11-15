<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>数据库链接</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your keywords">
	<meta name="description" content="your description">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	<div class="container">
		<h3 class="page-header">查看用户</h3>
		<table class="table table-struped table-bordered">
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
			</tr>
			<?php
//链接数据库 
 $pdo=new PDO('mysql:host=localhost;dbname=test','root','1234');
 //sql
$sql="select * from user";
$smt=$pdo->query($sql);
#返回关联数组
$rows=$smt->fetchAll(PDO::FETCH_ASSOC);
 foreach ($rows as  $row) {
 	echo "<tr>";
 	echo "<td>{$row['id']}</td>";
 	echo "<td>{$row['username']}</td>";
 	echo "<td>{$row['passwrod']}</td>";
 	echo "</tr>";
 }
 ?>
		</table>

	</div>
	
</body>
</html>