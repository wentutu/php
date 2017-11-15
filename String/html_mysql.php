<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>php_mysql</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your keywords">
	<meta name="description" content="your description">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<style type="text/css">
	*{
	font_family:微软雅黑;
	}
	textarea{
		width: 1000px;
		height: 100px;
		resize: none;
		border-radius: 5PX;
		padding: 15px;
		font-size: 25px;
	}
	</style>
</head>
<body>
   <h1>留言板</h1>
  <form action="str_mysql.php" method="POST">
  	
		<p>请留言</p>
		<p>
			
		<textarea name="info" ></textarea>	
		</p>
         <input type="submit" value="Ok">
  </form>



	<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	
</body>
</html>
