<?php 
 include 'mysql.config.php';
 include 'page.class.php';
 //获取表的行数
 $sqlTot="select  count(*) from user";
 $smtTot=$pdo->prepare($sqlTot);
 $smtTot->execute();
 $tot=$smtTot->fetchColumn();

 $page=new Page($tot,3);
 $sql="select * from user  limit {$page->offset},{$page->length}";
 $smt=$pdo->prepare($sql);
 $smt->execute();
 $rows=$smt->fetchAll();
 ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>用户模块</title>
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
		<a href="" class="btn btn-warning" >	查看用户</a>
		<a href="add.php" class="btn btn-primary" >添加用户</a>
	  </h1>		
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
				<th>修改</th>
				<th>删除</th>

			</tr>			
			<?php 
				foreach ($rows as $row) {
				 echo "<tr>";
				 echo "<td>{$row['id']}</td>";	
				  echo "<td>{$row['username']}</td>";	
				   echo "<td>{$row['passwrod']}</td>";	
				   echo "<td><a href='edit.php?id={$row['id']}' class='btn btn-success'>修改</a></td>";	
				   echo "<td><a href='delete.php?id={$row['id']}' class='btn btn-danger delete'>删除</a></td>";	
				 echo "</tr>";
				}

			 ?>
		</table>
		<div >
		<?php 
         echo $page->show();
		 ?>
		</div>
	</div>
  
</body>
<script type="text/javascript">
	$(".delete").click(function(){
 		cf=confirm('你确认删除吗？');
      if(!cf){
          return false;
      }
	});

</script>
</html>