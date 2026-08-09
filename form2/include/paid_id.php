<?php include("functions.php"); 
  $host="localhost"; // Host name
		$username="trueloveuser"; // Mysql username
	$password="Truemarriage@2021"; // Mysql password
	$db_name="marriagetruelove"; // Database name

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");


?>

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
 <center><h2 style="color:red;align:center">Profile Id Paid Here</h1>
  
  <div class="form-group col-sm-12" > 
  <br><h2 style="color:red;align:center">Search Paid Profile Id</h1>	
    <h3 style="color:red">Enter Profile ID Without Prefix ES:<h3>	    
    <form action="" method="POST" name="search_id">
		<input type="text" name="profile_id">
		<input type="submit" value="Search" name="search_id">
    </form>
</div>	
	</center>
 <?php
 
if (isset($_POST['search_id'])) {
	
	$custid=$_POST['profile_id'];
	require_once("../include/dbconn.php");
	$sql3="SELECT * FROM customer WHERE cust_id='$custid';";
	$result3=mysqlexec($sql3);
	$rowcount=mysqli_num_rows($result3);
	
	if($rowcount!=0){
	?>
	<div class="container"><!--container start-->

	<div style="overflow-x:auto;">
	  <table>
		<tr>
		  <th>Profile ID</th>
		  <th>Name</th>
		  <th>Mob No</th>
		  <th>Password</th>
		  <th>Gender</th>
		  <th>District</th>
		  <th>State</th>
		  <th>Profilecreationdate</th>
		  
		</tr>
<?php
	
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
    $pass=$new_row['password'];
	echo '<tr><td>'.$id.'</td><td>'.$name.'</td><td>'.$mobno.'</td><td>'.$pass.'</td><td>'.$gender.'</td><td>'.$dist.'</td><td>'.$state.'</td><td>'.$profile_date.'&nbsp;</td> ';
	
	?>
	</table>
	<center><h2 style="color:red;align:center">Enter Paid Id Details:</h1>
	<div class="form-group col-sm-12" > 
    
    <form action="" method="POST" name="final_id">
		
		
		<div class="form-group col-sm-4">
			    
			      <label for="edit-pass">No of Days <span class="form-required" title="This field is required.">*</span></label>
			         <div class="select-block1">
	                    <select name="no_days"  required>
							<option value="30">30</option>
		                    <option value="60">60</option>
							<option value="90">90</option>
							  
	                    </select>
	                  </div>
	            
		</div>
		<div class="form-group col-sm-4" form_box>
		      <label for="edit-name">Profile Visit <span class="form-required" title="This field is required.">*</span></label><br>
		      <input type="text" id="profile_visit" required name="profile_visit"  size="10" maxlength="10" class="form-text required">
		</div>
		<input type="hidden" id="usr_id" name="usr_id" value="<?php echo $id ?>">
		
		<div class="form-group col-sm-4" form_box>
		     
		</div>
		<br>
		<input type="submit" value="Paid" name="final_id">
    </form><br><br><br>
</div>	
	
	
	<?php
	
	}
	}else{
	
					?> <script>
					alert("User ID Does not Exist ");
					window.location="paid_id.php";
					</script>
					<?php
	}
	
}

if (isset($_POST['final_id'])) {
	$usr_id=$_POST['usr_id'];
	$profile_visit=$_POST['profile_visit'];
	$no_days=$_POST['no_days'];
	//Profile visit table
	$sql1="SELECT * FROM profile_visit WHERE ID='$usr_id';";
	$result1=mysqlexec($sql1);
	$new_row1=mysqli_fetch_assoc($result1);	
	$rowcount1=mysqli_num_rows($result1);
	$visit=$new_row1['visit'];
	if($rowcount1!=0){
		
		//echo $profile_visit;
		//UPDATE `profile_visit` SET `visit`= 100 WHERE `ID`= 226621
		$sql2 = "UPDATE
				   profile_visit 
				SET
				   visit_limit = '$profile_visit',visit = 0
				WHERE
				   ID = '$usr_id'";

		$result2 = mysqlexec($sql2);
		
	}else{
				$sql3="INSERT INTO profile_visit (ID, visit, visit_limit) VALUES('$usr_id', '0', '$profile_visit')";
				$result3=mysqli_query($conn,$sql3);
	
	}
	$x=0;
	if($no_days==30){
	$x=1;
	}
	if($no_days==60){
	$x=2;
	}
	if($no_days==90){
	$x=3;
	}
	$sql4="INSERT INTO membership (userid, orderAmount, txTime, txStatus) VALUES('$usr_id', '$x', CURDATE(), 'PAID_ID')";
				$result4=mysqli_query($conn,$sql4);
				
				
				$sql5 = "UPDATE
				   customer 
				SET
				   membership = '1'
				WHERE
				   cust_id = '$usr_id'";

		$result5 = mysqlexec($sql5);
		
		if ($result4 && $result5) {
			echo "<script>alert(\"ID is Successfully Paid\")</script>";
		}
	
}

?>

