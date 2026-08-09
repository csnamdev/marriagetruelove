<?php include("functions.php"); 
 $host="localhost"; // Host name
	$username="shineever"; // Mysql username
	$password="Shine@2021"; // Mysql password
	$db_name="evershinematrimony"; // Database name

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
 <center><h2 style="color:red;align:center">IP Address Add Here</h1>
  
  <div class="form-group col-sm-12" > 
  <br><h2 style="color:red;align:center">Add Public Ip Address</h1>	
    <h3 style="color:red">Carefully add Ip address:<h3>	    
    <form action="" method="POST" name="search_id">
        Name of Computer
		<input type="text" name="com_name" required><br><br>
		 Enter IP Address
		<input type="text" name="ipadd"><br><br>
		<input type="submit" value="Add"required name="add_ip">
    </form>
</div>	
	</center>
 
 

    
   <br><br><br>
</div>	
	
 <?php
 
if (isset($_POST['add_ip'])) {
	
	$name=$_POST['com_name'];
	$ip=$_POST['ipadd'];
	echo $name." ".$ip;
	require_once("../include/dbconn.php");
	$sql3="SELECT * FROM ip WHERE ipadd='$ip';";
	$result3=mysqlexec($sql3);
	$rowcount=mysqli_num_rows($result3);
	
	if($rowcount!=0){
	    echo "Ip Already Exist";
	}else{
	     echo "Ip Does not Exist";
	     $sql4="INSERT INTO ip (ipadd, name, date) VALUES('$ip', '$name', now())";
				$result4=mysqli_query($conn,$sql4);
				if($result4){
				    echo "IP Add Successfully";
				}
	}
}
	?>	
	
