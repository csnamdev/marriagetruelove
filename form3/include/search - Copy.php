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
      <th>District</th>
      <th>State</th>
      <th>Profilecreationdate</th>
      
    </tr>
   
  


<!--home start-->

</table>
</div>