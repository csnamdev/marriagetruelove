<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php register(); ?>
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
    
	 <img src="images/banner/heart2.jpg" alt="" /> 
	<!-- <div class="background-video">
					<video loop muted autoplay>
						<source src="videos/video3.mp4" type="video/mp4">
						
					</video>
	</div> -->
	<div ></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>View Profile</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#" style="color:white">We find Best Match of Your Partener</a></li>
					
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->






<section class="buy-pro" style="padding: 100px 0;background-image:url('img/3.jpg');background-size:cover">
	<div class="container" >
		<div class="row" >
			<div class="col-md-6 mx-auto" >
				<div class="pro-block text-center" style="padding: 40px 50px; background: #F3F3F3; box-shadow: 0px 2px 28px 0px #7777775e; border-radius: 15px;">
					<h1 style="font-size: 25px; line-height: 1; font-weight: 600;">Login</h1>
					
		
		
		
		<div class="row" >
			<div class="col-md-12">
				<form id="contact-form" action="auth/auth.php?user=1" method="post" role="form">
						<div class="row">
					
						<div class="col-md-12">
							<div class="form-group">
								
								<input class="form-control" style="border-radius: 25px;color:blue;font-size:22px ;font-weight: bold;" placeholder="Profile Id/Mobile Number" name="username" id="username"  type="text" required>
						        <input class="form-control" style="border-radius: 25px;margin-top:20px;color:blue;font-size:22px ;font-weight: bold;" name="password" id="pass" placeholder="Password" type="password" required>
							</div>
						
						</div>
						
					</div>
				
					
					
					
					
					<div class="text-center"><br>
					<!--<center><input type="submit" id="edit-submit" width="800px" height="400px" name="op" value="Submit" class="btn_1 submit"></center> -->
						<input type="submit"name="op" value="Submit" class="btn btn-primary solid blank" type="submit">
				</form>
			</div>
			
		</div>
	</div>
					
					
					
					
				</div>
			</div>
		</div>
	</div>
</section>



	


	<?php include_once("includes/copyright.php"); ?>

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