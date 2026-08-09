<?php include("functions.php"); ?>

<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:../userlogin/login.php");
}
?>

<?php include('header2.php'); ?>
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