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
<script src="../js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#checkAll").click(function(){
		if($(this).is(":checked")){
			$(".checkItem").prop('checked',true);
		}else{
			$(".checkItem").prop('checked',false);
		}
	});
});
</script>
 </head>
 <body>
 <?php
 if(isset($_POST['submit'])){
	 
	 if(isset($_POST['id'])){
		 $all_id="";
		 foreach($_POST['id'] as $id){
			
			 $activate_emp_customer="update customer set profilestat=1 WHERE cust_id='$id'";
			 $result2=mysqlexec($activate_emp_customer);
    
			$activate_emp_user="update users set profilestat=1 WHERE id='$id'";
			$result3=mysqlexec($activate_emp_user);
			$all_id.=$id.', ';
			
		 }
		 echo "<script>alert('Following Profiles $all_id Activated Sucessfully:')</script>";
	 }
 }
 
 if(isset($_POST['delete'])){
	 
	 if(isset($_POST['id'])){
		 $all_id="";
		 foreach($_POST['id'] as $id){
			
			 $activate_emp_customer="delete from customer WHERE cust_id='$id'";
			 $result2=mysqlexec($activate_emp_customer);
    
			$activate_emp_user="delete from users WHERE id='$id'";
			$result3=mysqlexec($activate_emp_user);
			$all_id.=$id.', ';
			
		 }
		 echo "<script>alert('Following Profiles $all_id Deleted Sucessfully:')</script>";
	 }
 }
 
 if(isset($_POST['export'])){
	 
	 if(isset($_POST['id'])){
		 $all_id=[];
		 $i=1;
		 foreach($_POST['id'] as $id){
		     $all_id[$i]=$id;
		     $i++;
		 }    
		    
            
        $queryString = http_build_query(['data' => $all_id]);
            
        // Redirect to another page with the query string
        header("Location: export_to_excel.php?$queryString");
        exit();
       
	 }
 }
 
 ?>
<div class="container"><!--container start-->

<div style="overflow-x:auto;">
<form action="" method="post">
  <table>
	<thead>
		<tr>
			<td>
				<input type="submit" name="submit" value="Activate" onclick="return confirm('Are You Sure Want to Activate All')">
			</td>
			<td style="text-align:right">
				<input type="submit" name="delete" value="Delete" onclick="return confirm('Are You Sure Want to Delete All')">
			</td>
			<td style="text-align:right">
				<input type="submit" name="export" value="Export" onclick="return confirm('Are You Sure Want to Export to Excel')">
			</td>
		</tr>
		<tr>
		  <th><input type="checkbox" id="checkAll"><b style="margin-left:10px">All</b></th>	
		  <th>Profile ID</th>
		  <th>Name</th>
		  <th>Gender</th>
		  <th>Mob No</th>
		  <th>Profile Date</th>
		  <th>Passwd</th>
		  <th>Email Id</th>
		  <th>Profile Status</th>
		</tr>
	</thead>	
   
  


<!--home start-->
<?php


				require_once("../include/dbconn.php");
				$sql2="SELECT * FROM customer WHERE profilestat = 0 ORDER BY cust_id DESC";
				$result2=mysqlexec($sql2);
                $rowcount=mysqli_num_rows($result2);
echo '<h2 style="color:red">No of Entries='.$rowcount.'</h2>';
while($row = mysqli_fetch_array($result2)) {
	$id=$row['id'];
	$cust_id=$row['cust_id'];
	$name = $row['firstname'];
	$gender = $row['sex'];
	$mob = $row['mobno'];
	$dob = $row['dateofbirth'];
	//$pass = $row['password'];
	$email = $row['email'];
	$profilecreationdate=$row['profilecreationdate'];
	echo '<tr><td><input type="checkbox" class="checkItem" value='.$cust_id.' name="id[]"></td><td>'.$cust_id.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$mob.'</td><td>'.$profilecreationdate.'</td><td>'."".'</td><td>'.$email.'</td><td>'."Deactive".'</td><td>'."<a href='start.php?stu_id=$id'>Activate</a>".'&nbsp;</td> ';
		
	
	}
	
	
?> 
</table>
</form>
</div>
