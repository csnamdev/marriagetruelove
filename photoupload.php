<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}

//calling photo uploader function
if (isset($_POST['op1'])){
	uploadphoto($id); 
	//echo "HIT";
	
}

//calling photo remover function
if (isset($_POST['op1_remove'])){
	removephoto($id); 
	//echo "HIT";
	
}

//calling photo2 uploader function
if (isset($_POST['op2'])){
	uploadphoto2($id); 
	//echo "HIT";
	
}

//calling photo2 remover function
if (isset($_POST['op2_remove'])){
	removephoto2($id); 
	//echo "HIT";
	
}

//calling photo3 uploader function
if (isset($_POST['op3'])){
	uploadphoto3($id); 
	//echo "HIT";
	
}

//calling photo3 remover function
if (isset($_POST['op3_remove'])){
	removephoto3($id); 
	//echo "HIT";
	
}

//calling photo4 uploader function
if (isset($_POST['op4'])){
	uploadphoto4($id); 
	//echo "HIT";
	
}

//calling photo4 remover function
if (isset($_POST['op4_remove'])){
	removephoto4($id); 
	//echo "HIT";
	
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Marriage True Love</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Slick-slider -->
	<link rel="stylesheet" href="plugins/slick/slick.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/ganesh.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<?php include_once("includes/header.php"); ?>

<div id="banner-area">
	<!-- <img src="images/banner/banner1.jpg" alt="" /> -->
	<img src="images/banner/heart2.jpg" alt="" />
	<!-- <div class="background-video">
					<video loop muted autoplay>
						<source src="videos/video3.mp4" type="video/mp4">
						
					</video>
	</div> 
	<div class="parallax-overlay"></div>  -->
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Upload Your Photo</h2>
			<nav aria-label="breadcrumb">
				
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">

		<!-- Pricing table start -->
		

		<!-- Pricing table start -->
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-university"></i></span>
				<h2 class="title classic">Upload Your Photos</h2>
			</div>
		</div><!-- Title row end -->

<?php //getting image filenames from db
$sql2="SELECT * FROM photos WHERE cust_id = $id";
$result2 = mysqlexec($sql2);


$sql3="SELECT * FROM users WHERE id = $id";
$result3 = mysqlexec($sql3);


if($result2){
	$row2=mysqli_fetch_array($result2);
	$row3=mysqli_fetch_array($result3);
	
	if($row2['pic1']==""){
		if($row3['gender']=="Male"){
			
		$pic1="img/male_upload.png";
		}else{
			$pic1="img/female_upload.png";
		}
		
	}else
	{
		$pic1="profile/".$id."/".$row2['pic1'];
	}
	
	
	if($row2['pic2']==""){
		
		if($row3['gender']=="Male"){
			
		$pic2="img/male_upload.png";
		}else{
			$pic2="img/female_upload.png";
		}
		
	}else
	{
		$pic2="profile/".$id."/".$row2['pic2'];
	}
	
	
	if($row2['pic3']==""){
		
		if($row3['gender']=="Male"){
			
		$pic3="img/male_upload.png";
		}else{
			$pic3="img/female_upload.png";
		}
		
	}else
	{
		$pic3="profile/".$id."/".$row2['pic3'];
	}
	
	
	if($row2['pic4']==""){
		
		if($row3['gender']=="Male"){
			
		$pic4="img/male_upload.png";
		}else{
			$pic4="img/female_upload.png";
		}
		
	}else
	{
		$pic4="profile/".$id."/".$row2['pic4'];
	}
	
	
	
	
}
?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     
   </div>
   <div class="services">
   	  <div class="col-sm-8 login_left">
	   
  	    <table width=50%>

	
                      
							<?php picture1($pic1,$pic2,$pic3,$pic4); ?>
					
	
			

</table>

	    
	   
	  </div>
	  <div class="col-sm-4">
	   
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

<?php include_once("footer.php");?>

</body>
</html>	
<?php
function picture1($pic1,$pic2,$pic3,$pic4){
	?>
  <tr>
	<td>
	<form action="" method="post" enctype="multipart/form-data">
	<center><img src="<?php echo $pic1;?>"style="background-color:#F3F3F3" id="photo1_tag"style="margin-top:20px"width="300" height="300">
							<label for="photo1" style="margin-top:10px;margin-left:5px;">Click On Image To Change/Upload Photo</label>
							<input type="file" class="form-control" name="photo1_img" onchange="photo1_img_(event)" style="display: none" id="photo1_img"></div>
							<script type="text/javascript">
								 window.onload = function () {
									 var fileupload = document.getElementById("photo1_img");
										var filePath = document.getElementById("spnFilePath");
										var image = document.getElementById("photo1_tag");
										
										var fileupload2 = document.getElementById("photo2_img");
										var filePath2 = document.getElementById("spnFilePath");
										var image2 = document.getElementById("photo2_tag");
										
										var fileupload3 = document.getElementById("photo3_img");
										var filePath3 = document.getElementById("spnFilePath");
										var image3 = document.getElementById("photo3_tag");
										
										var fileupload4 = document.getElementById("photo4_img");
										var filePath4 = document.getElementById("spnFilePath");
										var image4 = document.getElementById("photo4_tag");
										
										image2.onclick = function () {
											fileupload2.click();
											};
											
										image3.onclick = function () {
											fileupload3.click();
											};
											
										image4.onclick = function () {
											fileupload4.click();
											};
											
										image.onclick = function () {
											fileupload.click();
											};
								 }
								function photo1_img_(event) 
									{
										var fileupload = document.getElementById("photo1_img");
										var filePath = document.getElementById("spnFilePath");
										var image = document.getElementById("photo1_tag");
										
										image.onclick = function () {
											fileupload.click();
											};
           
										
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('photo1_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
									
									function photo2_img_(event) 
									{
										var fileupload = document.getElementById("photo2_img");
										var filePath = document.getElementById("spnFilePath");
										var image = document.getElementById("photo2_tag");
										
										image.onclick = function () {
											fileupload.click();
											};
           
										
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('photo2_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
									
									function photo3_img_(event) 
									{
										var fileupload = document.getElementById("photo3_img");
										var filePath = document.getElementById("spnFilePath");
										var image = document.getElementById("photo3_tag");
										
										image.onclick = function () {
											fileupload.click();
											};
           
										
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('photo3_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
									
									function photo4_img_(event) 
									{
										var fileupload = document.getElementById("photo4_img");
										var filePath = document.getElementById("spnFilePath");
										var image = document.getElementById("photo4_tag");
										
										image.onclick = function () {
											fileupload.click();
											};
           
										
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('photo4_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
							<div class="form-actions">
	    	<input type="submit"style="border-radius:25px;margin-left:0px;" id="edit-submit" name="op1" value="Upload" class="btn_1 submit">
			<?php 
				if($pic1!=""){  
				?>
			<input type="submit"style="border-radius:25px;margin-left:50px;" id="edit-submit" name="op1_remove" value="Remove" class="btn_1 submit">
				<?php }  ?>
			</center>
	    </div>
		</td>
		
		
		<td>
		
		<center><img src="<?php echo $pic2;?>"style="background-color:#F3F3F3" id="photo2_tag"style="margin-top:20px"width="300" height="300">
							<label for="photo2" style="margin-top:10px;margin-left:5px;">Click On Image To Change/Upload Photo</label>
							<input type="file" class="form-control" name="photo2_img" onchange="photo2_img_(event)" style="display: none" id="photo2_img"></div>
							
							<div class="form-actions">
	    	<input type="submit"style="border-radius:25px;margin-left:0px;" id="edit-submit" name="op2" value="Upload" class="btn_1 submit">
			<?php 
				if($pic2!=""){  
				?>
			<input type="submit"style="border-radius:25px;margin-left:50px;" id="edit-submit" name="op2_remove" value="Remove" class="btn_1 submit">
				<?php }  ?>
			</center>
	    </div>
		</td>	
	</tr>
	
	
	<tr>
	<td>
		
		<center><img src="<?php echo $pic3;?>"style="background-color:#F3F3F3" id="photo3_tag"style="margin-top:20px"width="300" height="300">
							<label for="photo3" style="margin-top:10px;margin-left:5px;">Click On Image To Change/Upload Photo</label>
							<input type="file" class="form-control" name="photo3_img" onchange="photo3_img_(event)" style="display: none" id="photo3_img"></div>
							
							<div class="form-actions">
	    	<input type="submit"style="border-radius:25px;margin-left:0px;" id="edit-submit" name="op3" value="Upload" class="btn_1 submit">
			<?php 
				if($pic3!=""){  
				?>
			<input type="submit"style="border-radius:25px;margin-left:50px;" id="edit-submit" name="op3_remove" value="Remove" class="btn_1 submit">
				<?php }  ?>
			</center>
	    </div>
		</td>	
		
		<td>
		
		<center><img src="<?php echo $pic4;?>"style="background-color:#F3F3F3" id="photo4_tag"style="margin-top:20px"width="300" height="300">
							<label for="photo4" style="margin-top:10px;margin-left:5px;">Click On Image To Change/Upload Photo</label>
							<input type="file" class="form-control" name="photo4_img" onchange="photo4_img_(event)" style="display: none" id="photo4_img"></div>
							
							<div class="form-actions">
	    	<input type="submit"style="border-radius:25px;margin-left:0px;" id="edit-submit" name="op4" value="Upload" class="btn_1 submit">
			<?php 
				if($pic4!=""){  
				?>
			<input type="submit"style="border-radius:25px;margin-left:50px;" id="edit-submit" name="op4_remove" value="Remove" class="btn_1 submit">
				<?php }  ?>
			</center>
	    </div>
		</td>	
	</tr>
	</form>
	
	
	<?php	
}




?>
		

		
		</div>
		<!--/ Content row end -->
	</div><!-- container end -->
</section>
<!--/ Main container end -->

<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Register yourself and Find Your Perfect Partener</h3>
				<a href="register.php" class="float-right btn btn-primary white">Register Now</a>
			</div>
		</div>
	</div>
</section>

	<!-- Footer start -->
	<?php include_once("includes/footer.php"); ?>
	<!-- Footer end -->


	<!-- Copyright start -->
	<?php include_once("includes/copyright.php"); ?>	
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- Slick slider -->
<script type="text/javascript" src="plugins/slick/slick.min.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>