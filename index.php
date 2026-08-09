<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php include_once("standard.php"); ?>
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
	<!-- <link rel="stylesheet" href="plugins/flex-slider/flexslider.css"> -->
	<!-- Slick-slider -->
   <!--	<link rel="stylesheet" href="plugins/slick/slick.css">  -->
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






<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 25px;
  
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 25px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: transparent;
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
	border-radius: 25px;
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  
  width: 50%; /* Could be more or less, depending on screen size */
  height:auto;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */

</style>

</head>

<body>
<!--
<div class="text-center">
	
	<a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
-->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="auth/auth.php?user=1" method="post">
   <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
	  <center><h3>Login Here</h3></center>
    </div> 

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" style="border-radius: 25px;" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" style="border-radius: 25px;" placeholder="Enter Password" name="password" required>
        
      <button type="submit" name="op" style="border-radius: 25px;">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Not Have Account? <a href="register.php">Register Here.</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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
<!-- Slider start -->

<section class="hero-slider text-center" style="background-color:#111B45;">

	<div class="slider-inner h-100"style="background-color:#111B45;">

		<div class="slider-item" data-dot="" style="background-image: url(images/slider/bg3.jpg);margin-bottom:-110px;">  

		<div class="slider-item">

			<div >

			
				<div class="container h-100">
				    
					<div class="row h-100 align-items-center">
					    
                             
						<div class="col-6">

							<h2 data-duration-in=".3" data-animation-in="fadeInDown">WE ARE HERE TO MAKE IT HAPPEN</h2>

							<h3 class="mb-4" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".4">We Making Difference To Great Things Possible</h3>

							<p  onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="cd-hero__btn btn btn-primary solid" data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".5">Login Here</p>
                            
                            
						</div>
						
						<div class="col-6">

                            
                            <form method="POST" action="" style="font-size:14px;width:400px;height:300px;margin-top:-100px;">
						         <h3>Register Yourself</h1>
						         
						         <input type="text" id="edit-name" required name="fname"  style="width:120px;height:35px;opacity:.5;" placeholder="First Name">
						        <input type="text" id="edit-name" required name="lname"  style="width:120px;height:35px;opacity:.5;" placeholder="Last Name"><br>
						        <input type="text" id="edit-name" required name="mobno"  style="width:250px;height:35px;opacity:.5" placeholder="Mobile Number"><br>
						         <select name="sex" style="width:120px;height:35px;opacity:.5;border-radius:25px;"  required>
									<option value="" selected style="margin-left:50px;padding:10px">Gender</option>
									<option value="Male" >Male</option>
									<option value="Female">Female</option> 
							   
								</select>
								
								<select name="state" style="width:120px;height:35px;opacity:.5;border-radius:25px;"  required>
									<option value="" selected style="margin-left:50px;padding:10px">State</option>
									
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
							   
								</select><br>
						      <div style="color:white;text-align:left;margin-left:80px;">Date of Birth:</div>
						      <select name="day" style="width:80px;height:35px;opacity:.5;border-radius:25px;"  required>
									<option value="" selected style="margin-left:50px;padding:10px">Day</option>
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
								
								<select name="month" style="width:80px;height:35px;opacity:.5;border-radius:25px;"  required>
									<option value="" selected style="margin-left:50px;padding:10px">Month</option>
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
								
								<select name="year" style="width:80px;height:35px;opacity:.5;border-radius:25px;"  required>
									<option value="" selected style="margin-left:50px;padding:10px">Year</option>
								
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
						      
						         <input type="text" style="width:250px;height:35px;opacity:.5" placeholder="City" name="city"/>
						         <input type="text" style="width:250px;height:35px;opacity:.5" placeholder="E-MailId" name="email"/>
						         <input type="text" style="width:250px;height:35px;opacity:.5" placeholder="Work" name="work"/>
						        <input type="password" style="width:250px;height:35px;opacity:.5" placeholder="pass" name="pass"/><br>
						       
						        <input type="submit" class="cd-hero__btn btn btn-primary solid" name="submit_next" data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".5" />
						        <br><br>
						    </form>
				           
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</section>

<!--/ Slider end -->
 

<!-- Search box Start Here -->
<section class="buy-pro" style="padding: 4px 0;background-color:transparent;margin-top:20px">
	<div class="container" >
		<div class="row" >
			<div class="col-md-12 mx-auto" >
				<div class="pro-block" style="background: #787575; box-shadow: 0px 2px 28px 0px #7777775e; border-radius:10px;border:5px solid gold;margin-top:-50px">
					
					
		
		
		
		
				<form class="" method="post" action="view_user_search.php" style="margin:20px;font-size:16px;color:white;text-align:center">
           
            
                           
               
                    <label class="gender_1">I am looking for :</label>
                    <div class="age_box1" style="max-width: 100%; display: inline-block;">
                        <select name="gender" class="form-control1" style="border-radius:10px;height:25px">
                            <option value="">Select Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                
                
              
                
                    <label class="gender_1"style="margin-left:10px">Age:</label>
                    <div class="age_box1" style="max-width: 100%; display: inline-block;">
                        <select style="width:55px; margin-right:5px;" name="frm_age" class="form-control1">
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
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">41</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                        </select>
                     </div>to
                     


                     <div class="age_box1" style="max-width: 100%; display: inline-block;">
                        <select style="width:55px;" name="to_age" class="form-control1">                        
                            
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30" selected>30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">41</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                            <option value="60">60</option>
                        </select>
                    </div>
               
                  <label class="gender_1" style="margin-left:10px">  State:</label>
                   <div class="age_box1" style="max-width: 100%; display: inline-block;">
                       	<select name="state" class="form-control1" style="border-radius:10px;height:25px;width:150px">
                       	
									<option value="" selected style="margin-left:50px;padding:10px">Select State</option>
									
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
                
               
                 
                
              
               		<input type="submit" style="margin-left:10px" class="cd-hero__btn btn btn-primary solid" value="SEARCH" name="submit_next" data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".5" />
						        
              

        
         
        
         </form>
				
				
			
	</div>
					
					
					
					
				</div>
			</div>
		</div>
	</div>
</section> 
 
<!-- Search box end here -->

<!-- #/BANNER -->

		<div class="col-md-12" style="background-color:#FF99FF; color:#000000">
			<marquee direction="left" height="26px" behavior="scroll" scrolldelay="100"><strong><h4 style="padding-top:5px;">हम अपनी और से आपको अच्छे से अच्छा रिश्ता बताने का प्रयास करते है। हमारा काम शादी के लिए रिश्ते बताना है न कि शादी करना और हम किसी भी रिश्ते की गारंटी नही लेते है। लड़के/लड़की व उनके परिवार की पूरी जानकारी आपको स्वयं ही करनी है।</h4></strong></marquee>
		</div>  
		
<!-- Service box start -->
<section  style="background-color:#111B45;">
   <!-- <marquee style="color:white;font-size:22px" direction="left" >
                        Note: Profile information (Mob. no., photo, address etc.) provided by consumer. Our company is not responsible for any issue. Information that we provide are given by consumer, we are not responsible for that. We are only service provider. We are not responsible for your marriage. If you want services then you make payment.
                </marquee> -->

	<div class="container"style="background-color:#111B45;">
	    
		<div class="row">
		    
			<div class="col-md-12 heading">
			    
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title" style="color:#FFA600">We Provide a Quality of Service <span class="title-desc" style="color:white">A Quality Experience Team with Many years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<!-- <span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span> -->
					<img src="img/icon1.png" style="margin-bottom:20px;">
					<h3 style="color:#FFA600">Lakhs of Genuine Members</h3>
					<p style="color:white">Search by location, community, profession & more. Get matches as per your preferences.</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<img src="img/icon2.png" style="margin-bottom:20px;">
					<h3 style="color:#FFA600">Verification by Visit</h3>
					<p style="color:white">Documents on Age, Address, Income etc. collected, Verified stamp added to profile</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<img src="img/icon3.png" style="margin-bottom:20px;">
					<h3 style="color:#FFA600">100% Privacy</h3>
					<p style="color:white">Control who can see your profile and pictures with advanced privacy settings</p>
				</div>
			</div>
			<!--/ End Third service -->

			
			
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->


<!-- Clients start -->

<section id="clients" class="clients" style="background-color:#EEEEEE;color:grey">

	<!-- <center><h1 style="align:center;margin-top:-50px;font-family:Oswald, sans-serif">Perfect Grooms/Bride</h1></center><br> -->

	<!-- <center><img src="img/logo_slider.png" width="350px" height="50%" style="align:center;margin-top:-50px;font-family:Oswald, sans-serif"></center> -->
    <center><div style="align:center;margin-top:-50px;font-family:Oswald, sans-serif;font-size:32px;color:red">Find Your Perfect Partner</div></center><br<
	<div class="container">

	

		<div class="row wow fadeInLeft">

		

			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">

				

		<?php

        	$sql="SELECT * FROM customer where profilestat=1 ORDER BY cust_id DESC";

        	$result=mysqlexec($sql);

        	if($result){

                $i=0;

        		while($row=mysqli_fetch_assoc($result)){

        			$name=$row['firstname'];

        			$profileid=$row['cust_id'];

        			$age=$row['age'];

        			$place=$row['state'];

        			$job=$row['occupation'];



        				//getting profilepic

        				$pic1='';

						

						$sql2="SELECT * FROM photos WHERE cust_id = $profileid";

						$result2 = mysqlexec($sql2);

						if($result2){

							$row2=mysqli_fetch_array($result2);

							

							$pic1=$row2['pic1'];

							//echo temp4;

						}

						//got profilepic

						//

					//Printing the html

					echo "<div class=\"col_1\"><a href=\"view_profile.php?id={$profileid}\">";

					if($row2['pic1']==""){

						

							if($row['sex']=="Male"){

								echo "<div style='width:300px;height:300px;background-image:url(img/frame4.png);background-repeat: no-repeat;background-size: auto'><img style='margin-top:35px;margin-right:35px' width=\"180px\" height=\"200px\" src=\"img/male.png\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"  /></div>";

							

								

							}else{

								

									echo "<div style='width:300px;height:300px;background-image:url(img/frame4.png);background-repeat: no-repeat;background-size: auto'><img style='margin-top:35px;margin-right:35px' width=\"180px\" height=\"200px\" src=\"img/female.png\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"  /></div>";

							

							

							}

					}else{

						//echo "<img src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\" />";

						echo "<div style='width:300px;height:300px;background-image:url(img/frame4.png);background-repeat: no-repeat;background-size: auto'><img style='margin-top:35px;margin-right:35px' width=\"180px\" height=\"200px\" src=\"profile/{$profileid}\/{$pic1}\" alt=\"\" class=\"hover-animation image-zoom-in img-responsive\"  /></div>";	

					}

					echo "<div class=\"layer m_1 hidden-link hover-animation delay1 fade-in\">";

					echo "<div  class=\"center-middle\" style='color:#72727d;font-family:Roboto, sans-serif;font-weight: bold;font-size:14px' ><h6>{$name}</h6></div>";

					echo "</div>";

					

					echo "<h6 style='color:#0194A8;font-family:Roboto, sans-serif;font-weight: bold;font-size:14px'><span class=\"m_3\">Profile ID : MTL{$profileid}</span><br>{$age}, {$place}<br>{$job}</h6></a></div>";

					

					echo "</li>";

                    if($i==20){ break; }

                    $i=$i+1;

        		}

        	}



        ?>



				


			</div><!-- Owl carousel end -->

		</div><!-- Main row end -->

	</div>

	<!--/ Container end -->

</section>

<!--/ Clients end -->





<!-- Counter Strat -->
<section class="ts_counter p-0"style="height:180px;>
	<div class="container-fluid" ">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-4 col-sm-6">
				<span class="facts-icon" ><i class="fa fa-user"></i></span>
				<div class="facts-num"><br>
					<span class="counter" style="margin-top:-15px">120000</span>
				</div>
				<h3>Profiles</h3>
			</div>

			<div class="facts two col-md-4 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
					<span class="counter">10</span>
				</div>
				<h3>Branches</h3>
			</div>

			
			<div class="facts four col-md-4 col-sm-6">
				<span class="facts-icon"><i class="fa fa-trophy"></i></span>
				<div class="facts-num">
					<span class="counter">10000</span>
				</div>
				<h3>Success Marriages</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->




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
					<a class="btn btn-primary" href="login.php">Proceed</a>
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
					<a class="btn btn-primary" href="login.php">Proceed</a>
				</div>
			</div><!-- plan end -->


	<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
				<div class="plan text-center">
					<span class="plan-name">1 Month Service <small></small></span>
					<p class="plan-price"><sup class="currency">Rs</sup><strong>25000</strong><sub>/-</sub></p>
					<ul class="list-unstyled">
						<li>Provide 5 Service</li>
						<li>Assistance Service for 1 Month</li>
						<li>View Mobile No./EmailId</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="login.php">Proceed</a>
				</div>
			</div><!-- plan end -->

           
			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
				<div class="plan text-center featured">
					<span class="plan-name">Unlimited Free Service <small></small></span>
					<p class="plan-price"><sup class="currency">Rs</sup><strong>60000</strong><sub>.00</sub></p>
					<ul class="list-unstyled">
						<li>250 Service Self Choose</li>
						<li>Valadity 90 Days</li>
						<li>Assistance help according to your requirment</li>
						<li>View Mobile No./EmailId</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="login.php">Proceed</a>
				</div>
			</div><!-- plan end -->
			
		
			
		</div>
		<!--/ Content row end -->
	</div><!-- container end -->
</section>
<!--/ Main container end -->








<?php include_once("includes/footer.php"); ?>



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
<?php

    if(isset($_POST['submit_next'])){
       register_next();
    }
?>
   