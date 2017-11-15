<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>用户注册页面</title>
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
	

	<h1>用户注册</h1>
	<form action="reg" method="post">
		<p>用户名:</p>
		<p>
			<input type="text" name='username'>
		</p>

		<p>密码</p>
		<p>
			<input type="password" name="pass">
		</p>
		<p>验证码图片</p>
		<p>
			<img src="verify.php" onclick="this.src='verify.php?rand='+Math.random()">
		</p>
		<p>输入验证码：</p>
		<p>
			<input type="text" name='fcode'>
		</p>
		<p>
			<input type="submit" value='Ok'>
		</p>
	</form>
</body>
</html>