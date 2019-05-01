<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	/*
		常用的请求方式（增删改查）
		get           向服务器请求查询的数据（根据传的参数查询）
		post         向服务器增加数据
		put           改数据
		delete      删除数据
	*/

		$f = $_GET['flag'];
		if ($f == 1) {
			echo "获得数据"."<br>";
			echo "数据是："."<h3>".$f."</h3>";
		}else{
			echo "参数错误";
		}

	?>
	 
</body>
</html>