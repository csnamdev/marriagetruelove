<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
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
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="background-video">
					<video loop muted autoplay>
						<source src="videos/video3.mp4" type="video/mp4">
						
					</video>
	</div>
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>our Membership</h2>
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
				<h2 class="title classic">Our Membership Plans</h2>
			</div>
		</div><!-- Title row end -->


		<div class="row">
			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
				<div class="plan text-center">
					<span class="plan-name">Free Membership <small</small></span>
					<p class="plan-price"><sup class="currency">Rs</sup><strong>2500</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>Registration Fee</li>
						<li>Valadity Life Time</li>
						
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Proceed</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
				<div class="plan text-center">
					<span class="plan-name">Assistance Service <small></small></span>
					<p class="plan-price"><sup class="currency">Rs</sup><strong>5000</strong><sub>/-</sub></p>
					<ul class="list-unstyled">
						<li>Provide 1 Service</li>
						<li>Assistance Service</li>
						<li>View Mobile Number</li>
						<li>View EmailId</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Proceed</a>
				</div>
			</div><!-- plan end -->


	<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
				<div class="plan text-center">
					<span class="plan-name">1 Month Service <small></small></span>
					<p class="plan-price"><sup class="currency">Rs</sup><strong>25000</strong><sub>/-</sub></p>
					<ul class="list-unstyled">
						<li>Provide 30 Service</li>
						<li>Assistance Service for 1 Month</li>
						<li>View Mobile No./EmailId</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Proceed</a>
				</div>
			</div><!-- plan end -->

           
			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
				<div class="plan text-center featured">
					<span class="plan-name">Unlimited Free Service <small></small></span>
					<p class="plan-price"><sup class="currency">Rs</sup><strong>60000</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>250 Service</li>
						<li>Valadity 90 Days</li>
						<li>Assistance Service</li>
						<li>View Mobile No./EmailId</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Proceed</a>
				</div>
			</div><!-- plan end -->
			
		
			
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