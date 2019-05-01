<?php

	$username = $_POST['username'];
	$passworld = $_POST['passworld'];
	header("Content-Type:text/plain;  charset = utf-8");
	if ($username == 'admin' && $passworld == '123456') {
		echo "登录成功";
	} else {
		echo "用户名或者密码错误";
	}
	

?>