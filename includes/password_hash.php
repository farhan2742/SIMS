<?php
	include("connection.php");
	$password = password_hash('limited_test', PASSWORD_DEFAULT);
	echo "$password";
	//$hashedPass = '$2y$10$c1.9OdVPBXn0WUViddF5MukGSqYc06iVUCYwAA96e6C2wrvatyiL2';
	//if (password_verify('admin_test', $hashedPass))
	//{
	//	echo "match";
	//}
	//else
	//{
	//	echo "not a match";
	//}
?>