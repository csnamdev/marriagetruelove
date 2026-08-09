<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php //register();

 ?>
 <?php 

if(! isloggedin()){
   header("location:login.php");
}
 ?>
<?php
$id=$_SESSION['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		processprofile_form($id);
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
	<!-- <img src="images/banner/heart.jpg" alt="" /> -->
	<img src="images/banner/heart2.jpg" alt="" /> 

		<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Edit Your Profile</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item" ><a href="#" style="color:white;">We find Best Match of Your Partener</a></li>
					
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->


<?php

$sql2="SELECT * FROM customer WHERE cust_id=$id";
	$result=mysqlexec($sql2);

	if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	
		while($y=mysqli_fetch_array($result)){
			   $email=$y['email'];
			   $age=$y['age'];
			   $sex= $y['sex'];
			   $religion= $y['religion'];
			   $caste=$y['caste'];
			   $subcaste=$y['subcaste'];
			   $district=$y['district'];
			   $state=$y['state'];
			   $country=$y['country'];
			   $maritalstatus=$y['maritalstatus'];
			   $profileby= $y['profilecreatedby'];
			   $education=$y['education'];
			   $edudescr=$y['education_sub'];
			   $fname=$y['firstname'];
			   $lname=$y['lastname'];
			   $bodytype=$y['body_type'];
			   $physicalstatus=$y['physical_status'];
			   $drink=$y['drink'];
			   $mothertounge=$y['mothertounge'];
			   $colour=$y['colour'];
			   $weight=$y['weight'];
			   $height=$y['height'];
			   $smoke=$y['smoke'];
			   $dob=$y['dateofbirth'];
			   $occupation=$y['occupation'];
			   $occupationdescr=$y['occupation_descr']; 
			   $income=$y['annual_income'];
			   $fatheroccupation=$y['fathers_occupation'];
			   $motheroccupation=$y['mothers_occupation'];
			   $bros=$y['no_bro'];
			   $sis=$y['no_sis'];
			   $aboutme=$y['aboutme'];
			   $mobno=$y['mobno'];
			  $family_status=$y['family_status'];
			  $family_type=$y['family_type'];
			   $bloodgroup=$y['blood_group'];
			  $diet=$y['diet'];
			  $address=$y['address'];
		}
	
	}else{
		
		$sql1="SELECT * FROM users WHERE id=$id";
		$result1=mysqlexec($sql1);
		while($x=mysqli_fetch_array($result1)){
		$fname=$x['firstname'];
		$dob=$x['dateofbirth'];
		$email=$x['email'];
			$sex=$x['gender'];
			
			$age="";
		    
		    $religion="";
		   $caste="";
		   $subcaste="";
		   $district="";
		   $state="";
		   $country="";
		   $maritalstatus="";
			$profileby="";
		   $education="";
		   $edudescr="";
		   $bloodgroup="";
		   $diet="";
		   $lname="";
		   $bodytype="";
		   $physicalstatus="";
		   $drink="";
		   $mothertounge="";
		   $colour="";
		   $weight="";
		   $smoke="";
		   $height="";
		   $occupation="";
		   $occupationdescr="";
		   $income="";
		   $fatheroccupation="";
		   $motheroccupation="";
		   $bros="";
		   $sis="";
           $aboutme="";
           $mobno="";
		   $family_status="";
			  $family_type="";
			  $address="";
	}
		
		
	
}


?>



<section class="buy-pro" style="padding: 100px 0;background-image:url('img/3.jpg');background-size:cover">
	<div class="container" >
		<div class="row" >
			<div class="col-md-12 mx-auto" >
				<div class="pro-block text-center" style="padding: 40px 50px; background: white; box-shadow: 0px 2px 28px 0px #7777775e; border-radius: 5px;">
					<h1 style="font-size: 25px; line-height: 1; font-weight: 600;">Basics & Lifestyle Details</h1>
					
		
		
		
		<div class="row" >
			<div class="col-md-12">
				<form id="contact-form" action="" method="post" role="form">
					
					
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								First Name
								</div>
								<input class="form-control" style="border-radius: 25px;" placeholder="First Name" name="fname" value="<?php echo $fname; ?>" id="fname"  type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Last Name
								</div>
								<input class="form-control" style="border-radius: 25px;" name="lname" id="lname" placeholder="Last Name" value="<?php echo $lname; ?>" type="text" required>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Gender
								</div>
								<select name="sex" style="border-radius: 25px;"  class="form-control" required>
									<option value="<?php echo $sex; ?>" selected hidden><?php echo $sex; ?></option>
									<option value="Male">Male</option>
									<option value="Female">Female</option> 
							   
								</select>
						
							
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								DOB
								<?php 
								      $ar=explode('-', $dob);
								      $d1=$ar[0];
								      $m1=$ar[1];
								      $year1=$ar[2];
								      
								?>
								</div>
								<select name="day" style="border-radius: 25px;font-size:12px"  class="form-control" required>
									<option value="" disabled selected hidden>DD</option>
									<option value="<?php echo $d1; ?>" selected hidden><?php echo $d1; ?></option>
									<option value="01">01</option>
									  <option value="02">02</option>
									  <option value="03">03</option>
									  <option value="04">04</option>
									  <option value="05">05</option>
									  <option value="06">06</option>
									  <option value="07">07</option>
									  <option value="08">08</option>
									  <option value="09">09</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
									  <option value="13">13</option>
									  <option value="14">14</option>
									  <option value="15">15</option>
									  <option value="16">16</option>
									  <option value="17">17</option>
									  <option value="18">18</option>
									  <option value="19">19</option>
									  <option value="20">20</option>
									  <option value="21">21</option>
									  <option value="22">22</option>
									  <option value="23">23</option>
									  <option value="24">24</option>
									  <option value="25">25</option>
									  <option value="26">26</option>
									  <option value="27">27</option>
									  <option value="28">28</option>
									  <option value="29">29</option>
									  <option value="30">30</option>
									  <option value="31">31</option>
	               
								</select>
						
							
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								<br>
								</div>
								<select name="month" style="border-radius: 25px; font-size:11px"  class="form-control" required>
								    <option value="<?php echo $m1; ?>" selected hidden><?php echo $m1; ?></option>
									
									<option value="01">Jan</option>
									<option value="02">Feb</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">Aug</option>
									<option value="09">Sept</option>
									<option value="10">Oct</option>
									<option value="11">Nov</option>
									<option value="12">Dec</option>
	               
								</select>
						
							
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								<br>
								</div>
								<select name="year" style="border-radius: 25px; font-size:12px"  class="form-control" required>
								<option value=""  disabled selected hidden>YY</option>
								<option value="<?php echo $year1; ?>" selected hidden><?php echo $year1; ?></option>
								  <option value="2003">2003</option>
								  <option value="2002">2002</option>
								  <option value="2001">2001</option>
								  <option value="2000">2000</option>
								  <option value="1999">1999</option>
								  <option value="1998">1998</option>
								  <option value="1997">1997</option>
								  <option value="1996">1996</option>
								  <option value="1995">1995</option>
								  <option value="1994">1994</option>
								  <option value="1993">1993</option>
								  <option value="1992">1992</option>
								  <option value="1991">1991</option>
								  <option value="1990">1990</option>
								  <option value="1989">1989</option>
								  <option value="1988">1988</option>
								  <option value="1987">1987</option>
								  <option value="1986">1986</option>
								  <option value="1985">1985</option>
								  <option value="1984">1984</option>
								  <option value="1983">1983</option>
								  <option value="1982">1982</option>
								  <option value="1981">1981</option>
								  <option value="1980">1980</option>
								  <option value="1979">1979</option>
								  <option value="1978">1978</option>
								  <option value="1977">1977</option>
								  <option value="1976">1976</option>
								  <option value="1975">1975</option>
								  <option value="1974">1974</option>
								  <option value="1973">1973</option>
								  <option value="1972">1972</option>
								  <option value="1971">1971</option>
								  <option value="1970">1970</option>
								  <option value="1969">1969</option>
								  <option value="1968">1968</option>
								  <option value="1967">1967</option>
								  <option value="1966">1966</option>
								  <option value="1965">1965</option>
								  <option value="1964">1964</option>
								  <option value="1963">1963</option>
								  <option value="1962">1962</option>
								  <option value="1961">1961</option>
								  <option value="1960">1960</option>
								  <option value="1959">1959</option>
								  <option value="1958">1958</option>
								  <option value="1957">1957</option>
								  <option value="1956">1956</option>
								  <option value="1955">1955</option>
								  <option value="1954">1954</option>
								  <option value="1953">1953</option>
								  <option value="1952">1952</option>
								  <option value="1951">1951</option>
								  <option value="1950">1950</option>
								  <option value="1949">1949</option>
								  <option value="1948">1948</option>
								  <option value="1947">1947</option>
								  <option value="1946">1946</option>
								  <option value="1945">1945</option>
								  <option value="1944">1944</option>
								  <option value="1943">1943</option>
								  <option value="1942">1942</option>
								  <option value="1941">1941</option>
								  <option value="1940">1940</option>
								  <option value="1939">1939</option>
								  <option value="1938">1938</option>
								  <option value="1937">1937</option>
								  <option value="1936">1936</option>
								  <option value="1935">1935</option>
								  <option value="1934">1934</option>
								  <option value="1933">1933</option>
								  <option value="1932">1932</option>
								  <option value="1931">1931</option>
								  <option value="1930">1930</option>
								  <option value="1929">1929</option>
								  <option value="1928">1928</option>
								  <option value="1927">1927</option>
								  <option value="1926">1926</option>
								  <option value="1925">1925</option>
								  <option value="1924">1924</option>
								  <option value="1923">1923</option>
								  <option value="1922">1922</option>
								  <option value="1921">1921</option>
								  <option value="1920">1920</option>
								  <option value="1919">1919</option>
								  <option value="1918">1918</option>
								  <option value="1917">1917</option>
								  <option value="1916">1916</option>
								  <option value="1915">1915</option>
								  <option value="1914">1914</option>
								  <option value="1913">1913</option>
								  <option value="1912">1912</option>
								  <option value="1911">1911</option>
								  <option value="1910">1910</option>
								  <option value="1909">1909</option>
								  <option value="1908">1908</option>
								  <option value="1907">1907</option>
								  <option value="1906">1906</option>
								  <option value="1905">1905</option>
								  <option value="1904">1904</option>
								  <option value="1903">1903</option>
								  <option value="1902">1902</option>
								  <option value="1901">1901</option>
								  <option value="1900">1900</option>
						   
							</select>
							
							</div>
						</div>
						
					
					</div>
					
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Maritial Status
								
								</div>
								<select name="maritalstatus" style="border-radius: 25px;"  class="form-control" required>
									    <option value="<?php echo $maritalstatus; ?>" selected hidden><?php echo $maritalstatus; ?></option>
										<option value="Never Married">Never Married</option>
										<option value="Divorced">Divorced</option> 
										<option value="Widowed">Widowed</option>
										<option value="Separated">Separated</option>
							   
								</select>
						
							
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Height
								</div>
								<select name="height" style="border-radius: 25px;"  class="form-control" required>
									<option value="<?php echo $height; ?>" selected hidden><?php echo $height; ?></option>
									<option value="0">Select</option>
									<option value="3ft.5in-105cm">3ft.5in-105cm</option>
									<option value="3ft.6in-107cm">3ft.6in-107cm</option>
									<option value="3ft.7in-110cm">3ft.7in-110cm</option>
									<option value="3ft.8in-112cm">3ft.8in-112cm</option>
									<option value="3ft.9in-115cm">3ft.9in-115cm</option>
									<option value="3ft.10in-117cm">3ft.10in-117cm</option>
									<option value="3ft.11in-120cm">3ft.11in-120cm</option>
									<option value="4ft-122cm">4ft-122cm</option>
									<option value="4ft.1in-125cm">4ft.1in-125cm</option>
									<option value="4ft.2in-127cm">4ft.2in-127cm</option>
									<option value="4ft.3in-130cm">4ft.3in-130cm</option>
									<option value="4ft.4in-132cm">4ft.4in-132cm</option>
									<option value="4ft.5in-135cm">4ft.5in-135cm</option>
									<option value="4ft.6in-137cm">4ft.6in-137cm</option>
									<option value="4ft.7in-140cm">4ft.7in-140cm</option>
									<option value="4ft.8in-142cm">4ft.8in-142cm</option>
									<option value="4ft.9in-145cm">4ft.9in-145cm</option>
									<option value="4ft.10in-147cm">4ft.10in-147cm</option>
									<option value="4ft.11in-150cm">4ft.11in-150cm</option>
									<option value="5ft-152cm">5ft-152cm</option>
									<option value="5ft.1in-155cm">5ft.1in-155cm</option>
									<option value="5ft.2in-157cm">5ft.2in-157cm</option>
									<option value="5ft.3in-160cm">5ft.3in-160cm</option>
									<option value="5ft.4in-162cm">5ft.4in-162cm</option>
									<option value="5ft.5in-165cm">5ft.5in-165cm</option>
									<option value="5ft.6in-167cm">5ft.6in-167cm</option>
									<option value="5ft.7in-170cm">5ft.7in-170cm</option>
									<option value="5ft.8in-172cm">5ft.8in-172cm</option>
									<option value="5ft.9in-175cm">5ft.9in-175cm</option>
									<option value="5ft.10in-177cm">5ft.10in-177cm</option>
									<option value="5ft.11in-180cm">5ft.11in-180cm</option>
									<option value="6ft-182cm">6ft-182cm</option>
									<option value="6ft.1in-185cm">6ft.1in-185cm</option>
									<option value="6ft.2in-187cm">6ft.2in-187cm</option>
									<option value="6ft.3in-190cm">6ft.3in-190cm</option>
									<option value="6ft.4in-192cm">6ft.4in-192cm</option>
									<option value="6ft.5in-195cm">6ft.5in-195cm</option>
									<option value="6ft.6in-197cm">6ft.6in-197cm</option>
									<option value="6ft.7in-200cm">6ft.7in-200cm</option>
									<option value="6ft.8in-202cm">6ft.8in-202cm</option>
									<option value="6ft.9in-205cm">6ft.9in-205cm</option>
									<option value="6ft.10in-207cm">6ft.10in-207cm</option>
									<option value="6ft.11in-210cm">6ft.11in-210cm</option>
									
							   
								</select>
						
							
							</div>
						</div>
						
						
				</div>		
					
					
					
				<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Physical Status
								</div>
								<select name="physicalstatus" style="border-radius: 25px;"  class="form-control" required>
									    <option value="<?php echo $physicalstatus; ?>" selected hidden><?php echo $physicalstatus; ?></option>
										<option value="No Problem">No Problem</option>
										<option value="Blind">Blind</option> 
										<option value="Deaf">Deaf</option> 
											   
								</select>
						
							
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Religion
								</div>
								<select name="religion" style="border-radius: 25px;"  class="form-control" required>
									<option value="<?php echo $religion; ?>" selected hidden><?php echo $religion; ?></option>
									<option value="Not Applicable">Not Applicable</option>
									<option value="Buddhist">Buddhist</option>
									<option value="Christian">Christian</option>
									<option selected="selected" value="Hindu">Hindu</option>
									<option value="Inter_Religion">Inter Religion</option>
									<option value="Jain">Jain</option>
									<option value="Jewish">Jewish</option>
									<option value="Muslim">Muslim</option>
									<option value="Muslim_Shia">Muslim - Shia</option>
									<option value="Muslim_Sunni">Muslim - Sunni</option>
									<option value="No_Religion">No Religion</option>
									<option value="Parsi">Parsi</option>
									<option value="Sikh">Sikh</option>
								</select>
							</div>
						</div>
				
				</div>




				<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Mother Tounge
								</div>
								<select name="mothertounge" style="border-radius: 25px;"  class="form-control" required>
									    <option value="<?php echo $mothertounge; ?>" selected hidden><?php echo $mothertounge; ?></option>
										<option value="Hindi">Hindi</option> 
										<option value="English">English</option> 
							   
								</select>
						
							
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Country
								</div>
								<select name="country" style="border-radius: 25px;"  class="form-control" required>
								    <option value="<?php echo $country; ?>" selected hidden><?php echo $country; ?></option>
									<option value="Not Applicable">Country</option>
									<option value="India">India</option>
								</select>
							</div>
						</div>
				
				</div>		
					
					
				<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								State
								</div>
								<select name="state" style="border-radius: 25px;"  class="form-control" required>
								<option value="<?php echo $state; ?>" selected hidden><?php echo $state; ?></option>	
								<option value="">State</option>
								<option value=" Andhra Pradesh "> Andhra Pradesh </option>
                                <option value=" Arunachal Pradesh "> Arunachal Pradesh </option>
                                <option value=" Assam"> Assam </option>
                                <option value=" Bihar "> Bihar </option>
                                <option value=" Chhattisgarh "> Chhattisgarh </option>
                                <option value=" Goa "> Goa </option>
                                <option value=" Gujarat "> Gujarat </option>
                                <option value=" Haryana "> Haryana </option>
                                <option value=" Himachal Pradesh "> Himachal Pradesh </option>
                                <option value=" Jammu and Kashmir "> Jammu and Kashmir </option>
                                <option value=" Jharkhand "> Jharkhand </option>
                                <option value=" Karnataka "> Karnataka </option>
                                <option value=" Kerala "> Kerala </option>
                                <option value=" Madhya Pradesh "> Madhya Pradesh </option>
                                <option value=" Maharashtra "> Maharashtra </option>
                                <option value=" Manipur "> Manipur </option>
                                <option value=" Meghalaya "> Meghalaya </option>
                                <option value=" Mizoram "> Mizoram </option>
                                <option value=" Nagaland "> Nagaland </option>
                                <option value=" Odisha "> Odisha </option>
                                <option value=" Punjab "> Punjab </option>
                                <option value=" Rajasthan "> Rajasthan </option>
                                <option value=" Sikkim "> Sikkim </option>
                                <option value=" Tamil Nadu "> Tamil Nadu </option>
                                <option value=" Telangana "> Telangadistrictna </option>
                                <option value=" Tripura "> Tripura </option>
                                <option value=" Uttarakhand "> Uttarakhand </option>
                                <option value=" Uttar Pradesh "> Uttar Pradesh </option>
                                <option value=" West Bengal "> West Bengal </option>
                                <option value=" Andaman and Nicobar Islands "> Andaman and Nicobar Islands </option>
                                <option value=" Chandigarh "> Chandigarh </option>
                                <option value=" Dadra and Nagar Haveli "> Dadra and Nagar Haveli </option>
                                <option value=" Daman and Diu "> Daman and Diu </option>
                                <option value=" Delhi "> Delhi </option>
                                <option value=" Lakshadweep "> Lakshadweep </option>
                                <option value=" Puducherry "> Puducherry </option>
							   
								</select>
						
							
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							    <div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Home Town
								</div>
							
								<div class="form-group">
								
								<input class="form-control" style="border-radius: 25px;" name="district" id="district" value="<?php echo $district; ?>" placeholder="Home Town" type="text" required>
							</div>
							</div>
						</div>
				
				</div>		


					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Address
								</div>
								<input class="form-control" style="border-radius: 25px;" placeholder="Address" value="<?php echo $address; ?>" name="address" id="address"  type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Mobile No.
								</div>
								<input class="form-control" style="border-radius: 25px;" name="mobno" id="mobno" value="<?php echo $mobno; ?>" placeholder="Mobile Number" type="text" required>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						
						<div class="col-md-6">
							<div class="form-group">
								<div class="text-left" style="margin-left:20px;margin-bottom:10px;">	
								Email-Id
								</div>
								<input class="form-control" style="border-radius: 25px;" placeholder="Email-ID" name="email" id="email" value="<?php echo $email; ?>"  type="email" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								
								<!-- <input class="form-control" style="border-radius: 25px;" name="pass" id="pass" placeholder="Password" type="password" required> -->
							</div>
						</div>
						
					</div>
					
					<div class="text-center"><br>
					<!--<center><input type="submit" id="edit-submit" width="800px" height="400px" name="op" value="Submit" class="btn_1 submit"></center> -->
						<input type="submit"name="oppo1" value="Save" class="btn btn-primary solid blank" type="submit">
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