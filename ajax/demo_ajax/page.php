<?php 

	$uname = $_GET['uname'];
	$pwd = $_GET["pwd"];

	if ($uname == "admin"  && $pwd == "123") {
		echo "1";
	} else {
		echo "2";
	}
	


 ?>