<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<head>
	<meta charset="utf-8">
	<title>文件上传</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="your keywords">
	<meta name="description" content="your description">
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<style>
		*{

			font-family: 微软雅黑;
		}

	</style>
</head>
<body>
	<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/vue/2.4.4/vue.min.js"></script>
	<h3>文件上传</h3>
	<form action="uploads.php" method="post" enctype="multipart/form-data">
		<p>请选择文件：</p>
		<p>
			<input type="file" name='img' id="">
		</p>
		<p>
			<input type="submit" value="上传">
		</p>
	</form>


</body>
</html>