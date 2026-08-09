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
	  <th>DOB</th>
      <th>No of Times</th>
      <th>DELETE</th>
      
    </tr>
   
  


<!--home start-->
<?php


				require_once("../include/dbconn.php");
				$sql2="SELECT * FROM users ORDER BY id DESC";
				
				$result2=mysqlexec($sql2);
                $rowcount=mysqli_num_rows($result2);
echo '<h2 style="color:red">No of Entries='.$rowcount.'</h2>';
$i=1;
while($row = mysqli_fetch_array($result2)) {
	$id=$row['id'];
	$mob=$row['mobno'];
	$sql22="SELECT * FROM users where mobno='$mob'";
				
				$result22=mysqlexec($sql22);
                $rowcount22=mysqli_num_rows($result22);
				if($rowcount22>=2)
				{
				echo '<tr><td>'.$id.'</td><td>'.$row['username'].'</td><td>'.$mob.'</td><td>'.$row['dateofbirth'].'</td><td>'.$rowcount22.'</td><td>'."<a href='all.php?stu_id=$id'>Delete</a>".'&nbsp;</td> ';
				$i=$i+1;
				}
}	
echo "Total Records=".$i;			
	/*			
	//require_once("../include/dbconn.php");
	$sql3="SELECT * FROM customer WHERE cust_id = $id";
	$result3=mysqlexec($sql3);
	$new_row=mysqli_fetch_assoc($result3);		
	$dist=$new_row['district'];
	$state=$new_row['state'];
	$profile_date=$new_row['profilecreationdate'];
	
	$name = $row['username'];
	$mobno = $row['mobno'];
	$dob = $row['dateofbirth'];
    $gender = $row['gender'];
	$stu_class= $row['email'];

if(strlen($mobno)!=10){
	echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mobno.'</td><td>'.$dob.'</td><td>'.$gender.'</td><td>'.$dist.'</td><td>'.$state.'</td><td>'.$profile_date.'</td><td>'."<a href='all.php?stu_id=$id'>Delete</a>".'&nbsp;</td> ';
	}	
	
	//echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mobno.'</td><td>'.$dob.'</td><td>'.$gender.'</td><td>'.$dist.'</td><td>'.$state.'</td><td>'.$profile_date.'&nbsp;</td> ';
	
    //delete record
   // echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mobno.'</td><td>'.$dob.'</td><td>'.$gender.'</td><td>'.$dist.'</td><td>'.$state.'</td><td>'.$profile_date.'</td><td>'."<a href='all.php?stu_id=$id'>Delete</a>".'&nbsp;</td> ';
	
	
	}
	*/
	
?> 
</table>
</div>

<?php
if(isset($_GET['stu_id'])){
    $temp=$_GET['stu_id'];
    $delete_emp_user="DELETE FROM users WHERE id=$temp;";
    $result1=mysqlexec($delete_emp_user);
	if($result1){
		$delete_emp_cust="DELETE FROM customer WHERE cust_id=$temp;";
		$result2=mysqlexec($delete_emp_cust);
		if($result2){
	
			echo "<script>alert('User Deleted Sucessfully with selected profile Id:')</script>";
			
		}
			
	}
						
}

?>