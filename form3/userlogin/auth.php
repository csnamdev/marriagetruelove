<?php
session_start();

$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 


if($myusername=="admin" && $mypassword=="admin@123"){


		
$_SESSION['id']="true";
		header("location:../include/all.php");
	
	
}
else {
echo "Wrong Username or Password";
}
?>