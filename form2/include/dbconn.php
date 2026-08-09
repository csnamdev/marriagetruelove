
<?php 
  $host="localhost"; // Host name
		$username="trueloveuser"; // Mysql username
	$password="Truemarriage@2021"; // Mysql password
	$db_name="marriagetruelove"; // Database name

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>