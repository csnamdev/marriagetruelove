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
	  <th>Gender</th>
      <th>Mob No</th>
      <th>Profile Date</th>
	  <th>Passwd</th>
      <th>Email Id</th>
      <th>Profile Status</th>
      
      
    </tr>
   
  


<!--home start-->
<?php


				require_once("../include/dbconn.php");
				$sql2="SELECT * FROM customer WHERE profilestat = 0 order by cust_id DESC";
				
				$result2=mysqlexec($sql2);
                $rowcount=mysqli_num_rows($result2);
echo '<h2 style="color:red">No of Entries='.$rowcount.'</h2>';
while($row = mysqli_fetch_array($result2)) {
	$id=$row['id'];
	
	$name = $row['firstname'];
	$gender = $row['sex'];
	$mob = $row['mobno'];
	$dob = $row['dateofbirth'];
	//$pass = $row['password'];
	$email = $row['email'];
	$cust_id=$row['cust_id'];
	$profilecreationdate=$row['profilecreationdate'];
	
	
			
	
	
	
    
	echo '<tr><td>'.$cust_id.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$mob.'</td><td>'.$profilecreationdate.'</td><td>'."".'</td><td>'.$email.'</td><td>'."Deactive".'</td><td>'."<a href='start.php?stu_id=$id'>Activate</a>".'&nbsp;</td> ';
		
	
	}
	
	
?> 
</table>
</div>
