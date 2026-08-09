<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}
 
$id=$_GET['id'];
//safty purpose copy the get id
$profileid=$id;

// get order id
$sql3="SELECT order_number FROM orderid";
$result3 = mysqlexec($sql3);

if($result3){
$row3=mysqli_fetch_assoc($result3);

	$orderId=$row3['order_number']+1;
	
	
}else{
	echo "<script>alert(\"Unable to fetch user ID\")</script>";
}
//getting profile details from db
$sql="SELECT * FROM customer WHERE cust_id = $id";
$result = mysqlexec($sql);
if($result){
$row=mysqli_fetch_assoc($result);

	$fname=$row['firstname'];
	$lname=$row['lastname'];
	$sex=$row['sex'];
	$email=$row['email'];
	$dob=$row['dateofbirth'];
	$religion=$row['religion'];
	$caste = $row['caste'];
	$subcaste=$row['subcaste'];
	$country = $row['country'];
	$state=$row['state'];
	$district=$row['district'];
	$age=$row['age'];
	$maritalstatus=$row['maritalstatus'];
	$profileby=$row['profilecreatedby'];
	$education=$row['education'];
	$edudescr=$row['education_sub'];
	$bodytype=$row['body_type'];
	$physicalstatus=$row['physical_status'];
	$drink=$row['drink'];
	$smoke=$row['smoke'];
	$mothertounge=$row['mothertounge'];
	$bloodgroup=$row['blood_group'];
	$weight=$row['weight'];
	$height=$row['height'];
	$colour=$row['colour'];
	$diet=$row['diet'];
	$occupation=$row['occupation'];
	$occupationdescr=$row['occupation_descr'];
	$fatheroccupation=$row['fathers_occupation'];
	$motheroccupation=$row['mothers_occupation'];
	$income=$row['annual_income'];
	$bros=$row['no_bro'];
	$sis=$row['no_sis'];
	$aboutme=$row['aboutme'];

//end of getting profile detils



	$pic1="";
	$pic2="";
	$pic3="";
	$pic4="";
//getting image filenames from db
$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
$result2 = mysqlexec($sql2);
if($result2){
	$row2=mysqli_fetch_array($result2);
	$pic1=$row2['pic1'];
	$pic2=$row2['pic2'];
	$pic3=$row2['pic3'];
	$pic4=$row2['pic4'];
}
}else{
	echo "<script>alert(\"Invalid Profile ID\")</script>";
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Makemylove
 | View_profile :: Make My Love
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Membership</li>
     </ul><br><br>
	 <?php
	 $sql4="SELECT cust_id FROM customer WHERE cust_id = $id";
$result4 = mysqlexec($sql4);
$row_new= mysqli_fetch_assoc($result4);
$xy=$row_new['cust_id'];
//echo $row_new[0];

if($xy!=""){
	
?>

	 
	 <!-- <form action="checkout.php" method="post" style="text-align:center"> -->
	  <form action="start.php" method="post" style="text-align:center">
		<table style="align:center;">
			<tr style="text-align:center;">
				<td style="text-align:left;width:350px;">
			<h2 style="color:red;">Days: 30 </h2>
		  <input type="radio" id="platinium" name="membership" value="1">
		  <label for="platenium"><img src="images/platinium.jpg" width="120px" height="120px" ></label></t>
		  <P style="color:blue;text-align:left;">Amount: 5000<br> 
		  <P style="color:blue;text-align:left;">Connect directly with Matches:<br> View detailed Profile information</p>
			</td>
			<td style="text-align:left;width:350px;">
			<h2 style="color:red;"> Days: 60  </h2>
		  <input type="radio" id="gold" name="membership" value="2">
		  <label for="gold"><img src="images/gold.jpg" width="120px" height="120px" ></label>
		  <P style="color:blue;text-align:left;">Amount: 10000<br> 
		  <P style="color:blue;text-align:left;">Connect directly with Matches:<br> View detailed Profile information</p>
		  </td>
		  <td style="text-align:left;width:350px;">
		  <h2 style="color:red;"> Days: 180</h2>
		  <input type="radio" id="silver" name="membership" value="3">
		  <label for="silver"><img src="images/silver.jpg" width="120px" height="120px"></label>
		  <P style="color:blue;text-align:left;">Amount: 15000<br> 
            <P style="color:blue;text-align:left;">Connect directly with Matches:<br> View detailed Profile information</p>
			</td>
			</tr>
			</table>
			<input type="hidden" name="userId" value='<?php echo $id; ?>'/>
            <input type="hidden" name="orderId" value='<?php echo $orderId; ?>'/>
		  <br><br><br><br><center><input type="submit" value="Upgrade"></center>
	</form> 
<?php
}else{
	?>
	<H3 style="color:red">Kindly Upgrade Your Profile First</h3>
<?php
}
?>
   </div>
   </div>
</div>

<?php include_once("footer.php");?>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>   
</body>
</html>	