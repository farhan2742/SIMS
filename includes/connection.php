<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "sims_db";
	$connection = mysqli_connect($server, $username, $password, $db);
	if (!$connection)
	{
		die("Connection Failed: " . mysqli_connect_error());
	}
?>