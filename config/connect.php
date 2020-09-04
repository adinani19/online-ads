<?php

	$host = "localhost";
	$db = "adsdb";
	$user = "root";
	$pwd = "";

	$con = mysqli_connect($host, $user, $pwd, $db);

	if(mysqli_connect_error($con)){
	    die("Failed to establish connection..");
	}

?>