<?php 

	$uname = $_POST['uname'];
	$pwd = $_POST["pwd"];

	if ($uname == "admin"  && $pwd == "123") {
		echo "1";
	} else {
		echo "2";
	}
	


 ?>