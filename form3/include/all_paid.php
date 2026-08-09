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
      <th>Paid Date</th>
      <th>Days</th>
	  <th>Remaining Days</th>
      <th>Profile Limit</th>
      <th>Profile Visited</th>
      
      
    </tr>
   
  


<!--home start-->
<?php


				require_once("../include/dbconn.php");
				$sql2="SELECT * FROM profile_visit ORDER BY ID DESC";
				
				$result2=mysqlexec($sql2);
                $rowcount=mysqli_num_rows($result2);
echo '<h2 style="color:red">No of Entries='.$rowcount.'</h2>';
while($row = mysqli_fetch_array($result2)) {
	$id=$row['ID'];
	$profile_visit=$row['visit'];
    $visit_limit=$row['visit_limit'];
	//require_once("../include/dbconn.php");
	$sql3="SELECT * FROM users WHERE id = $id";
	$result3=mysqlexec($sql3);
	$new_row=mysqli_fetch_assoc($result3);		
	$name = $new_row['username'];
	$gender = $new_row['gender'];
	//fetch data from membership table
	$sql4="SELECT * FROM membership WHERE userid = $id";
	$result4=mysqlexec($sql4);
	$new_row2=mysqli_fetch_assoc($result4);	
	$txdate=$new_row2['txTime'];
	$orderamount=$new_row2['orderAmount'];
	
	$old_time=$new_row2['txTime'];
			$days_calculate=$new_row2['orderAmount'];
			$final_days=0;
			if($days_calculate==1)
			{ $final_days=30;
			}
			if($days_calculate==2)
			{ $final_days=60;
			}
			if($days_calculate==3)
			{ $final_days=90;
			}
	
			// PHP code to find the number of days 
			date_default_timezone_set('Asia/Kolkata');
			$cur_date=date("Y-m-d");
			$date4=date_create($old_time);
			$date5=date_create($cur_date);
			$diff5=date_diff($date4,$date5);
			$t=$diff5->format("%a");
			$remaining_days=$final_days-$t;
			
	//fetch data from customer table
	$sql5="SELECT * FROM customer WHERE cust_id = $id";
	$result5=mysqlexec($sql5);
	$new_row3=mysqli_fetch_assoc($result5);	
	$membership=$new_row3['membership'];
	
	
    
	echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$txdate.'</td><td>'.$final_days.'</td><td>'.$remaining_days.'</td><td>'.$visit_limit.'</td><td>'.$profile_visit.'</td><td>'."<a href='all.php?stu_id=$id'>Delete</a>".'&nbsp;</td> ';
		
	
	}
	
	
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