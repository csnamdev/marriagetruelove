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
      
      
      
      
    </tr>
   
  


<!--home start-->
<?php

@ini_set("output_buffering", "Off");
@ini_set('implicit_flush', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('max_execution_time',1200);

			require_once("../include/dbconn.php");
				$sql2="SELECT * FROM copy_users";
				
				$result2=mysqlexec($sql2);
                $rowcount=mysqli_num_rows($result2);
echo '<h2 style="color:red">No of Entries='.$rowcount.'</h2>';
while($row = mysqli_fetch_array($result2)) {
	$id=$row['id'];
	$name=$row['name'];
    $mobno=$row['mobno'];
	
	register_copy2($id);
    
	sleep(1);
    flush();
    ob_flush();
	
	}
	
?> 
</table>
</div>
<?php
if(isset($_GET['stu_id'])){
    $temp=$_GET['stu_id'];
	echo $temp;
   register_copy2($temp);
						
}

?>