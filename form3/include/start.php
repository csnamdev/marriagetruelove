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

tr:nth-child(even){background-color: #f2f2f2}
</style>
 </head>
 <body>
<div class="container"><!--container start-->
<h1 style="color:red"> Welcome In Marriagetruelove Control panel!</h1>
<div style="overflow-x:auto;">
  
</div>

<?php
if(isset($_GET['stu_id'])){
    $temp=$_GET['stu_id'];
    
    $sql22="SELECT * FROM customer WHERE id=$temp";
	$result22=mysqlexec($sql22);
    //$rowcount22=mysqli_num_rows($result22);
    $row22 = mysqli_fetch_array($result22);           
    $temp22=$row22['cust_id'];
    //echo $temp22;
                
    $activate_emp_customer="update customer set profilestat=1 WHERE id=$temp";
    $result2=mysqlexec($activate_emp_customer);
    
    $activate_emp_user="update users set profilestat=1 WHERE id=$temp22";
    $result3=mysqlexec($activate_emp_user);
    
	echo "<script>alert('User Profile Activated Sucessfully:')</script>";
		       	
}

?>