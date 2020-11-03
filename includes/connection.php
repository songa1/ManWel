<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";

	$db = "manwel";

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

	if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
	}else {
		echo "Connection established";
	}
?>