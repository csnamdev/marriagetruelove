<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php //include_once("responsive.php"); ?>
<?php //responsive(); ?>
<?php

$id=$_GET['id'];
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:index.php");
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

<!-- Header start -->
<?php include_once("includes/header.php"); ?>
<!--/ Header end -->

<div id="banner-area">
	<!-- <img src="images/banner/banner1.jpg" alt="" /> -->
	<img src="images/banner/heart2.jpg" alt="" />
	<!-- <div class="background-video">
					<video loop muted autoplay>
						<source src="videos/video3.mp4" type="video/mp4">
						
					</video>
	</div> -->
	<!-- <div class="parallax-overlay"></div> -->
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Welcome In User dashboard</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<!-- <li class="breadcrumb-item"><a href="#"><?php echo $fname; ?></a></li>-->
					<li class="breadcrumb-item text-white" aria-current="page">Profile Id: MTL<?php echo $id ?></li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->



<!-- Portfolio start -->
<section id="main-container" class="portfolio portfolio-box">
	<div class="container">
	
	<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-university"></i></span>
				<h2 class="title classic">Profile Id:MTL<?php echo $id ?></h2>
			</div>
</div>
		<!--Isotope filter start -->
		<div class="row text-center">
			<div class="col-12">
				<div class="isotope-nav" >
					<ul>
						<li><a href="view_profile.php?id=<?php echo $id;?>" class="active" >View profile</a></li>
						<li><a href="edit_profile1.php?id=<?php echo $id;?>" data-filter=".web-design">Edit Profile</a></li>
						
						<li><a href="photoupload.php?id=<?php echo $id;?>" data-filter=".development">Upload Photos</a></li>
						<li><a href="view_profile_search.php?id=$id" data-filter=".joomla">Regular Search</a></li>
						<!-- <li><a href="#" data-filter=".wordpress">Search By Id</a></li> -->
						<li><a href="pricing.php" data-filter=".wordpress">Upgrade Membership</a></li>
						
					</ul>
				</div>
			</div>
		</div><!-- Isotope filter end -->


<?php
// no of visit profile code
$session_visit_id=$id;
$sql_visit="SELECT * FROM profile_visit WHERE ID = $session_visit_id";
$result_visit = mysqlexec($sql_visit);
$row_visit=0;
$visit_limit=0;
if($result_visit){
$row_visit1=mysqli_fetch_assoc($result_visit);
$row_visit=$row_visit1['visit'];
$visit_limit=$row_visit1['visit_limit'];
}else{
	$row_visit=0;
}


$sql_new = "SELECT * FROM customer WHERE cust_id = $id";
$result_new = mysqlexec($sql_new);
$row_new= mysqli_fetch_assoc($result_new);
if($row_new['membership']==0){
			?>
			<div style="width:100%;height:250px;">
			  <!-- <H3 style="color:red">Kindly Upgrade Your Membership to See Complete information of Members</h3> -->
			</div>
			  </div>
			<?php 
}
else{
			$sql_new = "SELECT * FROM membership WHERE userid = $id";
			$result_new = mysqlexec($sql_new);
			$row_new= mysqli_fetch_assoc($result_new);
			$old_time=$row_new['txTime'];
			$days_calculate=$row_new['orderAmount'];
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
			
			if($t>=$final_days || $row_visit>$visit_limit){
				
				
				$x=0;
				$sql6 = "UPDATE
							   customer 
							SET
							   membership = '$x'
							   WHERE
							   cust_id = '$id'
							";

					$result6 = mysqlexec($sql6);
					
					$sql7 ="DELETE FROM `membership` WHERE `membership`.`userid` = '$id'";
					$result7 = mysqlexec($sql7);
				
				
				?>
				<H3 style="color:red">Your Membership is Expired! Kindly Upgrade Your Membership</h3>
				<?php
			}
			else{
				?>
				<H3 style="color:red"> You can visit only <?php echo $visit_limit ?> profiles</h3><br>
				<H3 style="color:red"> Total profile visit= <?php echo $row_visit;?></h3><br>
				<H3 style="color:red"><?php echo $final_days-$t;?> Days Remaining for Your Membership</h3><br>

			<?php }
 
}
?>

		

<!--
		<div id="isotope" class="isotope row">
			<div class="col-sm-3 web-design isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio1.jpg" alt="">
						<figcaption>
							<h3>Startup Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio2.jpg" alt="">
						<figcaption>
							<h3>Easy to Lanunch</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio3.jpg" alt="">
						<figcaption>
							<h3>Your Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 wordpress isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio4.jpg" alt="">
						<figcaption>
							<h3>Prego Match</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg4.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio5.jpg" alt="">
						<figcaption>
							<h3>Fashion Brand</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg5.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio6.jpg" alt="">
						<figcaption>
							<h3>The Insidage</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg1.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio7.jpg" alt="">
						<figcaption>
							<h3>Light Carpet</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg2.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="images/portfolio/portfolio8.jpg" alt="">
						<figcaption>
							<h3>Amazing Keyboard</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="images/portfolio/portfolio-bg3.jpg"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->

<div class="gap-40"></div>

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