<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
 $host="localhost"; // Host name
	$username="trueloveuser"; // Mysql username
	$password="Truemarriage@2021"; // Mysql password
	$db_name="marriagetruelove"; // Database name
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","trueloveuser","Truemarriage@2021","marriagetruelove");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}
?>