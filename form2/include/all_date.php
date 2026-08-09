<?php include("functions.php"); ?>

<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:../userlogin/login.php");
}
?>
<?php include('header.php'); ?>
<html>
<head>
 <style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
  font-size:16px;
  padding-left:10px;
  
}
th{
	color:red;
}
tr:nth-child(even){background-color: #f2f2f2}
</style>
 </head>
 <body>
<div class="container"><!--container start-->

<div style="overflow-x:auto;">
  <table>
    <tr>
      <th>Profile ID</th>
      <th>Name</th>
      <th>Mob No</th>
      <th>Date of Birth</th>
	  <th>Gender</th>
      <th>Password</th>
      <th>State</th>
      <th>Profilecreationdate</th>
      
    </tr>

<!--home start-->
<?php
if (isset($_POST['mob_submit'])) {
$mobno=$_POST['mobno'];
echo '<h2 style="color:red">Search Result According to Mobile Number:'.$mobno.'</h2>';
require_once("../include/dbconn.php");
$sql3="SELECT * FROM customer WHERE mobno='$mobno';";
$result3=mysqlexec($sql3);
$rowcount=mysqli_num_rows($result3);
echo '<h2 style="color:red">No of entries='.$rowcount.'<h2>';
while($row = mysqli_fetch_array($result3)) {
	$id=$row['cust_id'];	
	$dist=$row['district'];
	$state=$row['state'];
	$profile_date=$row['profilecreationdate'];
	$mobno = $row['mobno'];
	$dob = $row['dateofbirth'];
    $gender = $row['sex'];
	$stu_class= $row['email'];

    $sql2="SELECT * FROM users WHERE id='$id'";
				
	$result2=mysqlexec($sql2);
    $new_row=mysqli_fetch_assoc($result2);	
    $name = $new_row['username'];
	$password = $new_row['password'];
	echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mobno.'</td><td>'.$dob.'</td><td>'.$gender.'</td><td>'.$password.'</td><td>'.$state.'</td><td>'.$profile_date.'&nbsp;</td> ';
	
	
	}
}



//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST['submit'])) {
$sday=$_POST['sday'];
$smonth=$_POST['smonth'];
$syear=$_POST['syear'];
$start_date=$syear."-".$smonth."-".$sday;

$eday=$_POST['eday'];
$emonth=$_POST['emonth'];
$eyear=$_POST['eyear'];
$end_date=$eyear."-".$emonth."-".$eday;
$gen=$_POST['gender'];


require_once("../include/dbconn.php");
				
	
if($gen=="any"){	
$sql3="SELECT * FROM customer WHERE profilecreationdate BETWEEN '$start_date' AND '$end_date';";
}
if($gen=="Male"){	
$sql3="SELECT * FROM customer WHERE sex='Male' AND profilecreationdate BETWEEN '$start_date' AND '$end_date';";
}
if($gen=="Female"){	
$sql3="SELECT * FROM customer WHERE sex='Female' AND profilecreationdate BETWEEN '$start_date' AND '$end_date';";
}
$result3=mysqlexec($sql3);
$rowcount=mysqli_num_rows($result3);
echo '<h2 style="color:red">No of entries='.$rowcount.'<h2>';
while($row = mysqli_fetch_array($result3)) {
	$id=$row['cust_id'];	
	$dist=$row['district'];
	$state=$row['state'];
	$profile_date=$row['profilecreationdate'];
	$mobno = $row['mobno'];
	$dob = $row['dateofbirth'];
    $gender = $row['sex'];
	$stu_class= $row['email'];

    $sql2="SELECT * FROM users WHERE id='$id'";
				
	$result2=mysqlexec($sql2);
    $new_row=mysqli_fetch_assoc($result2);	
    $name = $new_row['username'];
	
	echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mobno.'</td><td>'.$dob.'</td><td>'.$gender.'</td><td>'.$dist.'</td><td>'.$state.'</td><td>'.$profile_date.'&nbsp;</td> ';
	
	
	}
	
}	
?>  
  

  


</table>
</div>
</html>
