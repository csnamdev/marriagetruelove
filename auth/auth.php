
<?php
session_start();
require_once("../includes/dbconn.php");
$userlevel=$_GET['user'];
// username and password sent from form 
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 

$str2=substr($myusername, 3, 7); 

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);

$sql="SELECT * FROM users WHERE mobno='$myusername' OR id='$str2' AND password='$mypassword'";
$result=mysqli_query($conn,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$row=mysqli_fetch_assoc($result);
$id=$row['id'];
$stat=$row['profilestat'];
if($stat==0){
    echo "<script>alert('User Profile Not Activated By Admin!')</script>";
    ?>
    <button type="button"><a href="../login.php">Go Back</a></button>
    <?php
    
    //sleep(5000);
    //header("location:../login.php");
}else{
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
	$_SESSION['username']= $myusername;
	$_SESSION['id']=$id;
	if($userlevel=='1')
		header("location:../userhome.php?id={$row['id']}");
	else
		header("location:../admin.php");
}
else {
echo "Wrong Username or Password";
}
}
// If result matched $myusername and $mypassword, table row must be 1 row

?>