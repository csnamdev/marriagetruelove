<?php
session_start();
//require_once("../includes/dbconn.php");
$userlevel=$_GET['user'];
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
echo $myusername; 
echo $mypassword; 
echo "shekhar";
if($myusername=="admin" && $mypassword=="admin@123"){

        $_SESSION['id']="true";

		header("location:../../include/start.php");
	
}
else {
echo "Wrong Username or Password";

}
?>