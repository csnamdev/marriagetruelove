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
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
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
			<h2>Welcome In User dashboard</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Chandrashekhar</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Profile Id: Es</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->



<!-- Portfolio start -->
<section id="main-container" class="portfolio portfolio-box">
	<div class="container">
	
	<?php
					if(isset($_POST['search']) || isset($_POST['search2'])){

						unset($_SESSION['agemin']);
                        unset($_SESSION['agemax']);
                        unset($_SESSION['maritalstatus']);
                        unset($_SESSION['state']);
                        unset($_SESSION['religion']);
                        unset($_SESSION['mothertounge']);
                        unset($_SESSION['cosexunter']);
                        unset($_SESSION['caste']);
						usleep( 2 * 1000 );
						
						$_SESSION["maritalstatus"] = $_POST['maritalstatus'];
						$_SESSION["state"] = $_POST['state'];
						$_SESSION["religion"] = $_POST['religion'];
						$_SESSION["mothertounge"] = $_POST['mothertounge'];
						$_SESSION["sex"] = $_POST['sex'];
                        $_SESSION["caste"] = $_POST['caste'];
						
                        if($_POST['agemin']=="" && $_POST['agemax']==""){
                            $_SESSION["agemin"] = 18;
						    $_SESSION["agemax"] = 80;
                            //echo "Empty age";
                        }else{
                            $_SESSION["agemin"] = $_POST['agemin'];
						    $_SESSION["agemax"] = $_POST['agemax'];
                        }
					}
//echo $_SESSION["agemin"];
			$agemin=$_SESSION["agemin"];
			$agemax=$_SESSION["agemax"];
			$maritalstatus=$_SESSION["maritalstatus"];
			$state=$_SESSION["state"];
            $caste=$_SESSION["caste"];
			$religion=$_SESSION["religion"];
			$mothertounge=$_SESSION["mothertounge"];
			?>
			<form action="" method="post" style="padding:20px">
	   <center><label style="color:red;font-size:18px;text-align:center;width:50%" >Refine Your Search </label></center>
		<table>
					
					<tr width="100%" height="50px">
						<td width="35%" align="right">
							<!-- <label  for="sex">Gender : </label> -->
						</td>
						 <td width="60%" style="padding-left: 10px;">
							<input type="radio" class="radio_1" hidden name="sex" id="male" value="Male" /> <!-- Groom --> &nbsp;&nbsp;
							<input type="radio" class="radio_1" hidden name="sex" id="female" value="Female"/> 
						</td>
						
						<script type="text/javascript">
						
						m1 = '<?php echo $_SESSION['sex'] ;?>';
						
								if(m1 == "Male"){
							  document.getElementById('male').checked = true;
								}else{
									document.getElementById('female').checked = true;
								}
							</script>
					</tr>
					<tr width="100%"height="50px">
						<td width="35%" align="right">
							<label  for="sex" >Marital Status : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
							<select name="maritalstatus" id="maritalstatus" >
									<option value="any"> Any </option>
									<option value="Never Married">Single</option>
									<option value="Divorced">Divorced</option>
									<option value="Widowed">Widowed</option>
									<option value="Separated">Separated</option>
									
							</select>
							<script type="text/javascript">
							  document.getElementById('maritalstatus').value = "<?php echo $_SESSION['maritalstatus'];?>";
							</script>
						</td>
					</tr>
					<tr width="100%"height="50px">
						<td width="35%" align="right">
							<label  for="sex" >State : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
							<select name="state" id="state">
            
								<option value="any"> Any </option>
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
                                <option value=" Telangana "> Telangana </option>
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
							<script type="text/javascript">
							  document.getElementById('state').value = "<?php echo $_SESSION['state'];?>";
							</script>
						</td>
					</tr>
					
					<tr width="100%"height="50px">
						<td width="35%" align="right">
							<label  for="sex" >Religion : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
							 <select name="religion" id="religion">
									<option value="any"> Any </option>
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
							<script type="text/javascript">
							  document.getElementById('religion').value = "<?php echo $_SESSION['religion'];?>";
							</script>
						</td>
					</tr>
					
					<tr width="100%"height="50px">
						<td width="35%" align="right">
							<label  for="sex" >Caste : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
							 <select name="caste" id="caste">
							 <option value="any"> Any </option>   
							<option value=" Brahmin-Kanyakubj "> Brahmin-Kanyakubj </option>
							<option value="Ad dharmi">Ad dharmi</option>
							<option value="Adi Andhra">Adi Andhra</option>
							<option value="Adi dravida">Adi dravida</option>
							<option value="Adi Karnataka">Adi Karnataka</option>
							<option value="Agamudayar">Agamudayar</option>
							<option value="Agarwal">Agarwal</option>
							<option value="Agnikula Kshatriya">Agnikula Kshatriya</option>
							<option value="Agri">Agri</option>
							<option value="Ahirwar">Ahirwar</option>
							<option value="Ahom">Ahom</option>
							<option value="Ambalavasi">Ambalavasi</option>
							<option value="Arora">Arora</option>
							<option value="Arunthathiyar">Arunthathiyar</option>
							<option value="Arya Vysya">Arya Vysya</option>
							<option value="Badhai">Badhai</option>
							<option value="Baidya">Baidya</option>
							<option value="Bairwa">Bairwa</option>
							<option value="Baishnab">Baishnab</option>
							<option value="Baishya">Baishya</option>
							<option value="Balai">Balai</option>
							<option value="Balija">Balija</option>
							<option value="Balija Naidu">Balija Naidu</option>
							<option value="Banik">Banik</option>
							<option value="Baniya">Baniya</option>
							<option value="Banjara">Banjara</option>
							<option value="Barajibi">Barajibi</option>
							<option value="Bari">Bari</option>
							<option value="Besta">Besta</option>
							<option value="Bhabasar Kshtariya">Bhabasar Kshtariya</option>
							<option value="Bhandari">Bhandari</option>
							<option value="Bhatia">Bhatia</option>
							<option value="Bhatnagar">Bhatnagar</option>
							<option value="Bhatraju">Bhatraju</option>
							<option value="bhavasar kshatriya">bhavasar kshatriya</option>
							<option value="Bhovi">Bhovi</option>
							<option value="Billava">Billava</option>
							<option value="Bishnoi/Vaishnoi">Bishnoi/Vaishnoi</option>
							<option value="Boyer">Boyer</option>
							<option value="Brahmbatt">Brahmbatt</option>
							<option value="Brahmbhatt ">Brahmbhatt </option>
							<option value="Brahmin">Brahmin</option>
							<option value="Brahmin -  Paliwal">Brahmin -  Paliwal</option>
							<option value="Brahmin -  Panda">Brahmin -  Panda</option>
							<option value="Brahmin - Adi gaur">Brahmin - Adi gaur</option>
							<option value="Brahmin - Anavil">Brahmin - Anavil</option>
							<option value="Brahmin - Audichya">Brahmin - Audichya</option>
							<option value="Brahmin - Barendra">Brahmin - Barendra</option>
							<option value="Brahmin - Bhargava">Brahmin - Bhargava</option>
							<option value="Brahmin - Bhatt">Brahmin - Bhatt</option>
							<option value="Brahmin - Bhumihar">Brahmin - Bhumihar</option>
							<option value="Brahmin - Gaur">Brahmin - Gaur</option>
							<option value="Brahmin - Gaur Saraswat">Brahmin - Gaur Saraswat</option>
							<option value="Brahmin - Goswami ">Brahmin - Goswami </option>
							<option value="Brahmin - Havyaka ">Brahmin - Havyaka </option>
							<option value="Brahmin - Iyengar">Brahmin - Iyengar</option>
							<option value="Brahmin - Kulin">Brahmin - Kulin</option>
							<option value="Brahmin - Madhwa">Brahmin - Madhwa</option>
							<option value="Brahmin - Maithil">Brahmin - Maithil</option>
							<option value="Brahmin - Nagar">Brahmin - Nagar</option>
							<option value="Brahmin - Niyogi">Brahmin - Niyogi</option>
							<option value="Brahmin - Pandit">Brahmin - Pandit</option>
							<option value="Brahmin - Rarhi">Brahmin - Rarhi</option>
							<option value="Brahmin -Kasmiri pandit">Brahmin -Kasmiri pandit</option>
							<option value="Brahmin -Modh">Brahmin -Modh</option>
							<option value="Brahmin -Mohyal">Brahmin -Mohyal</option>
							<option value="Brahmin -Pushkarana">Brahmin -Pushkarana</option>
							<option value="Brahmin -Rigvedi">Brahmin -Rigvedi</option>
							<option value="Brahmin -Sakaldwipi ">Brahmin -Sakaldwipi </option>
							<option value="Brahmin -Sanidya">Brahmin -Sanidya</option>
							<option value="Brahmin -Sankethi">Brahmin -Sankethi</option>
							<option value="Brahmin -Saraswats">Brahmin -Saraswats</option>
							<option value="Brahmin -Saryupareen ">Brahmin -Saryupareen </option>
							<option value="Brahmin -Shivhali">Brahmin -Shivhali</option>
							<option value="Brahmin -Shri Gaur ">Brahmin -Shri Gaur </option>
							<option value="Brahmin -Shrimali">Brahmin -Shrimali</option>
							<option value="Brahmin -Smartha">Brahmin -Smartha</option>
							<option value="Brahmin -Sri Vaishnava">Brahmin -Sri Vaishnava</option>
							<option value="Brahmin -Stanika">Brahmin -Stanika</option>
							<option value="Brahmin -Tyagi">Brahmin -Tyagi</option>
							<option value="Brahmin -Vaidiki">Brahmin -Vaidiki</option>
							<option value="Brahmin -Vyas">Brahmin -Vyas</option>
							<option value="Brahmin –Andra">Brahmin –Andra</option>
							<option value="Brahmin –Bracharararam">Brahmin –Bracharararam</option>
							<option value="Brahmin –Jangara">Brahmin –Jangara</option>
							<option value="Brahmin –Jogi">Brahmin –Jogi</option>
							<option value="Brahmin –Kannada">Brahmin –Kannada</option>
							<option value="Brahmin –Rudraj">Brahmin –Rudraj</option>
							<option value="Brahmin –Utkal">Brahmin –Utkal</option>
							<option value="Brahmin –Vishwa">Brahmin –Vishwa</option>
							<option value="Brahmin –Yajurvedi">Brahmin –Yajurvedi</option>
							<option value="Brahmin-6000 Niyogi">Brahmin-6000 Niyogi</option>
							<option value="Brahmin-Bhumihar">Brahmin-Bhumihar</option>
							<option value="Brahmin-Brahmin- Namboodiri">Brahmin-Brahmin- Namboodiri</option>
							<option value="Brahmin-Brahmin-Narmadiya">Brahmin-Brahmin-Narmadiya</option>
							<option value="Brahmin-Dadheechi">Brahmin-Dadheechi</option>
							<option value="Brahmin-Daivadnya">Brahmin-Daivadnya</option>
							<option value="Brahmin-Danua">Brahmin-Danua</option>
							<option value="Brahmin-Deshastha">Brahmin-Deshastha</option>
							<option value="Brahmin-Dhiman">Brahmin-Dhiman</option>
							<option value="Brahmin-Dravida">Brahmin-Dravida</option>
							<option value="Brahmin-Garhwali">Brahmin-Garhwali</option>
							<option value="Brahmin-Gujar Gaur">Brahmin-Gujar Gaur</option>
							<option value="Brahmin-Gurukkal ">Brahmin-Gurukkal </option>
							<option value="Brahmin-Halua">Brahmin-Halua</option>
							<option value="Brahmin-Hoysala">Brahmin-Hoysala</option>
							<option value="Brahmin-Iyer ">Brahmin-Iyer </option>
							<option value="Brahmin-Jangid">Brahmin-Jangid</option>
							<option value="Brahmin-Jhadua">Brahmin-Jhadua</option>
							<option value="Brahmin-Jijhotia">Brahmin-Jijhotia</option>
							<option value="Brahmin-Karhade">Brahmin-Karhade</option>
							<option value="Brahmin-Kokanastha">Brahmin-Kokanastha</option>
							<option value="Brahmin-Kota">Brahmin-Kota</option>
							<option value="Brahmin-Kumaoni">Brahmin-Kumaoni</option>
							<option value="Brahmo">Brahmo</option>
							<option value="Buddhist ">Buddhist </option>
							<option value="Chamar">Chamar</option>
							<option value="Chambhar">Chambhar</option>
							<option value="Chandravanshi Kahar">Chandravanshi Kahar</option>
							<option value="CHASA">CHASA</option>
							<option value="Chattada Sri Vaishnava">Chattada Sri Vaishnava</option>
							<option value="Chaudhary">Chaudhary</option>
							<option value="Chaurasia">Chaurasia</option>
							<option value="Chettiar">Chettiar</option>
							<option value="Chhetri">Chhetri</option>
							<option value="CKP">CKP</option>
							<option value="Coorgi">Coorgi</option>
							<option value="Devadiga">Devadiga</option>
							<option value="Devandra Kula Vellalar">Devandra Kula Vellalar</option>
							<option value="Devang Koshthi">Devang Koshthi</option>
							<option value="Devanga">Devanga</option>
							<option value="Dhangar">Dhangar</option>
							<option value="Dhanuk">Dhanuk</option>
							<option value="Dheevara">Dheevara</option>
							<option value="Dhiman">Dhiman</option>
							<option value="Dhiwar">Dhiwar</option>
							<option value="Dhoba">Dhoba</option>
							<option value="Dhobi">Dhobi</option>
							<option value="Dom">Dom</option>
							<option value="Dumar">Dumar</option>
							<option value="Ediga">Ediga</option>
							<option value="Ezhava">Ezhava</option>
							<option value="Ezhuthachan">Ezhuthachan</option>
							<option value="Gabit">Gabit</option>
							<option value="Gandla">Gandla</option>
							<option value="Ganiga">Ganiga</option>
							<option value="Garhwali">Garhwali</option>
							<option value="Garmani">Garmani</option>
							<option value="Gavali">Gavali</option>
							<option value="Gavara">Gavara</option>
							<option value="Ghumar">Ghumar</option>
							<option value="Goala">Goala</option>
							<option value="Goan">Goan</option>
							<option value="Gomantak Maratha">Gomantak Maratha</option>
							<option value="Gonda\ST">Gonda\ST</option>
							<option value="Gondhali">Gondhali</option>
							<option value="Goud">Goud</option>
							<option value="Gounder">Gounder</option>
							<option value="Gowda">Gowda</option>
							<option value="Gudia">Gudia</option>
							<option value="Gupta">Gupta</option>
							<option value="Jaiswal">Jaiswal</option>
							<option value="Jangam">Jangam</option>
							<option value="Jat">Jat</option>
							<option value="Jatav">Jatav</option>
							<option value="Jhariya">Jhariya</option>
							<option value="Kadava Patel">Kadava Patel</option>
							<option value="Kahar">Kahar</option>
							<option value="Kaibarta">Kaibarta</option>
							<option value="Kalar">Kalar</option>
							<option value="Kalinga">Kalinga</option>
							<option value="Kalita">Kalita</option>
							<option value="Kalwar">Kalwar</option>
							<option value="Kamboj">Kamboj</option>
							<option value="Kamma">Kamma</option>
							<option value="Kanaujia">Kanaujia</option>
							<option value="Kansari">Kansari</option>
							<option value="kapol">kapol</option>
							<option value="Kapu">Kapu</option>
							<option value="Karana">Karana</option>
							<option value="Karmakar">Karmakar</option>
							<option value="Karuneegar">Karuneegar</option>
							<option value="Kasar">Kasar</option>
							<option value="Kashyap">Kashyap</option>
							<option value="Katiya">Katiya</option>
							<option value="Kayastha">Kayastha</option>
							<option value="Kewat">Kewat</option>
							<option value="Khandayat">Khandayat</option>
							<option value="Khandelwal">Khandelwal</option>
							<option value="Khashap Rajpoot">Khashap Rajpoot</option>
							<option value="Khatri">Khatri</option>
							<option value="Kirar Dhakad">Kirar Dhakad</option>
							<option value="Koli">Koli</option>
							<option value="Kongu Vellala Gounder">Kongu Vellala Gounder</option>
							<option value="Konkani">Konkani</option>
							<option value="Kori">Kori</option>
							<option value="Kostha">Kostha</option>
							<option value="Kosthi">Kosthi</option>
							<option value="Kshatriya">Kshatriya</option>
							<option value="Kudumbi">Kudumbi</option>
							<option value="Kulal">Kulal</option>
							<option value="Kulalar">Kulalar</option>
							<option value="Kulita">Kulita</option>
							<option value="Kumawat">Kumawat</option>
							<option value="Kumbhakar">Kumbhakar</option>
							<option value="Kumbhar">Kumbhar</option>
							<option value="Kumhar">Kumhar</option>
							<option value="Kummari">Kummari</option>
							<option value="Kunbi">Kunbi</option>
							<option value="Kureel">Kureel</option>
							<option value="Kurmi">Kurmi</option>
							<option value="Kurmi Kshatriya">Kurmi Kshatriya</option>
							<option value="Kuruba">Kuruba</option>
							<option value="Kuruhina Shetty">Kuruhina Shetty</option>
							<option value="Kurumbar">Kurumbar</option>
							<option value="Kushwaha">Kushwaha</option>
							<option value="Kutchi">Kutchi</option>
							<option value="Kutchi Gurjar">Kutchi Gurjar</option>
							<option value="Lambadi">Lambadi</option>
							<option value="Leva patel">Leva patel</option>
							<option value="Leva Patidar">Leva Patidar</option>
							<option value="Leva patil">Leva patil</option>
							<option value="Lingayath">Lingayath</option>
							<option value="Lodhi">Lodhi</option>
							<option value="Lodhi Rajput">Lodhi Rajput</option>
							<option value="Lohana">Lohana</option>
							<option value="Lubana">Lubana</option>
							<option value="Luhar">Luhar</option>
							<option value="Madiga">Madiga</option>
							<option value="Mahajan">Mahajan</option>
							<option value="Mahar">Mahar</option>
							<option value="Mahendra">Mahendra</option>
							<option value="Maheshwari">Maheshwari</option>
							<option value="Mahishya">Mahishya</option>
							<option value="Majabi">Majabi</option>
							<option value="Majhi">Majhi</option>
							<option value="Mala">Mala</option>
							<option value="Mali">Mali</option>
							<option value="Malla">Malla</option>
							<option value="Mallah">Mallah</option>
							<option value="Mangalorean">Mangalorean</option>
							<option value="Manipuri">Manipuri</option>
							<option value="Mapila">Mapila</option>
							<option value="Maratha">Maratha</option>
							<option value="Maruthuvar">Maruthuvar</option>
							<option value="Marwari">Marwari</option>
							<option value="Matang">Matang</option>
							<option value="Mathur">Mathur</option>
							<option value="Meena">Meena</option>
							<option value="Meenavar">Meenavar</option>
							<option value="Meghwal">Meghwal</option>
							<option value="Mehra">Mehra</option>
							<option value="Meru Darji">Meru Darji</option>
							<option value="Mochi">Mochi</option>
							<option value="Modak">Modak</option>
							<option value="Mogaveera">Mogaveera</option>
							<option value="Mourya ">Mourya </option>
							<option value="Mudaliyar">Mudaliyar</option>
							<option value="Mudiraj">Mudiraj</option>
							<option value="Mukkulathor">Mukkulathor</option>
							<option value="Munnuru Kapu">Munnuru Kapu</option>
							<option value="Muthuraja">Muthuraja</option>
							<option value="Nadar">Nadar</option>
							<option value="Nai">Nai</option>
							<option value="Naicker">Naicker</option>
							<option value="Naidu">Naidu</option>
							<option value="Naik">Naik</option>
							<option value="Nair">Nair</option>
							<option value="Namdeo">Namdeo</option>
							<option value="Namdeo Darji">Namdeo Darji</option>
							<option value="Namosudra">Namosudra</option>
							<option value="Napit">Napit</option>
							<option value="Nayaka">Nayaka</option>
							<option value="Nema">Nema</option>
							<option value="Nepali">Nepali</option>
							<option value="Nhavi">Nhavi</option>
							<option value="Nishad">Nishad</option>
							<option value="Oswal">Oswal</option>
							<option value="Padmasali">Padmasali</option>
							<option value="Pal">Pal</option>
							<option value="Panchal">Panchal</option>
							<option value="Panicker">Panicker</option>
							<option value="Parkava Kulam">Parkava Kulam</option>
							<option value="Pasi">Pasi</option>
							<option value="Patel">Patel</option>
							<option value="Patnaick">Patnaick</option>
							<option value="Patra">Patra</option>
							<option value="Patwa">Patwa</option>
							<option value="Pawar">Pawar</option>
							<option value="Pillai">Pillai</option>
							<option value="Porwal">Porwal</option>
							<option value="Pradhan">Pradhan</option>
							<option value="Prajapati">Prajapati</option>
							<option value="Raghuvanshi">Raghuvanshi</option>
							<option value="Raikwar">Raikwar</option>
							<option value="Rajak">Rajak</option>
							<option value="Rajastani">Rajastani</option>
							<option value="Rajbonshi">Rajbonshi</option>
							<option value="Rajput">Rajput</option>
							<option value="Rajput -Negi">Rajput -Negi</option>
							<option value="Rajput- Kumouni">Rajput- Kumouni</option>
							<option value="Rajput- Rohella/Tank">Rajput- Rohella/Tank</option>
							<option value="Rajput-Gharwali">Rajput-Gharwali</option>
							<option value="Ramdasia">Ramdasia</option>
							<option value="Ramgariah">Ramgariah</option>
							<option value="Ravidasia">Ravidasia</option>
							<option value="Rawat">Rawat</option>
							<option value="Reddy">Reddy</option>
							<option value="Rengar">Rengar</option>
							<option value="Sadgope">Sadgope</option>
							<option value="Saha">Saha</option>
							<option value="Sahu">Sahu</option>
							<option value="Saini">Saini</option>
							<option value="Saliya">Saliya</option>
							<option value="Satnami">Satnami</option>
							<option value="Saubar Banik">Saubar Banik</option>
							<option value="SC">SC</option>
							<option value="Sen">Sen</option>
							<option value="Senai Thalaivar">Senai Thalaivar</option>
							<option value="Settibalija">Settibalija</option>
							<option value="Shetty">Shetty</option>
							<option value="Shimpi">Shimpi</option>
							<option value="Sindhi">Sindhi</option>
							<option value="Sindhi-Amil">Sindhi-Amil</option>
							<option value="Sindhi-Baibhand">Sindhi-Baibhand</option>
							<option value="Sindhi-Bhanusali">Sindhi-Bhanusali</option>
							<option value="Sindhi-Bhatia">Sindhi-Bhatia</option>
							<option value="Sindhi-Chhapru">Sindhi-Chhapru</option>
							<option value="Sindhi-Dadu">Sindhi-Dadu</option>
							<option value="Sindhi-Hyderabadi">Sindhi-Hyderabadi</option>
							<option value="Sindhi-Larai">Sindhi-Larai</option>
							<option value="Sindhi-Larkana">Sindhi-Larkana</option>
							<option value="Sindhi-Lohana">Sindhi-Lohana</option>
							<option value="Sindhi-Rohiri">Sindhi-Rohiri</option>
							<option value="Sindhi-Sahiti">Sindhi-Sahiti</option>
							<option value="Sindhi-Sakkhar">Sindhi-Sakkhar</option>
							<option value="Sindhi-Sehwani">Sindhi-Sehwani</option>
							<option value="Sindhi-Shikarpuri">Sindhi-Shikarpuri</option>
							<option value="Sindhi-Thatai">Sindhi-Thatai</option>
							<option value="SKP">SKP</option>
							<option value="Somvanshi">Somvanshi</option>
							<option value="Somvanshi Kayastha">Somvanshi Kayastha</option>
							<option value="Sonar">Sonar</option>
							<option value="Soni">Soni</option>
							<option value="Sourashtra">Sourashtra</option>
							<option value="Sozhiya Vellalar">Sozhiya Vellalar</option>
							<option value="Srisayani">Srisayani</option>
							<option value="ST">ST</option>
							<option value="Sundhi">Sundhi</option>
							<option value="Suthar">Suthar</option>
							<option value="Swakula Sali">Swakula Sali</option>
							<option value="Tamboli">Tamboli</option>
							<option value="Tanti">Tanti</option>
							<option value="Tantubai">Tantubai</option>
							<option value="Telaga">Telaga</option>
							<option value="Teli">Teli</option>
							<option value="Thakkar">Thakkar</option>
							<option value="Thakur">Thakur</option>
							<option value="Thevar/Mukkala">Thevar/Mukkala</option>
							<option value="Thigala">Thigala</option>
							<option value="Thiyya">Thiyya</option>
							<option value="Tili">Tili</option>
							<option value="Turupu Kapu">Turupu Kapu</option>
							<option value="Uppara">Uppara</option>
							<option value="Vaddera">Vaddera</option>
							<option value="Vaidiki Velangelu">Vaidiki Velangelu</option>
							<option value="Vaish">Vaish</option>
							<option value="Vaishnav">Vaishnav</option>
							<option value="Vaishnava">Vaishnava</option>
							<option value="Vaishya">Vaishya</option>
							<option value="Vaishya Vani">Vaishya Vani</option>
							<option value="Valluvar">Valluvar</option>
							<option value="Valmiki">Valmiki</option>
							<option value="Vania">Vania</option>
							<option value="Vaniya">Vaniya</option>
							<option value="Vanjara">Vanjara</option>
							<option value="Vanjari">Vanjari</option>
							<option value="Vankar">Vankar</option>
							<option value="Vannar">Vannar</option>
							<option value="Vannia Kula Kshatriyar">Vannia Kula Kshatriyar</option>
							<option value="Varman">Varman</option>
							<option value="Varshney">Varshney</option>
							<option value="Veera Saivam">Veera Saivam</option>
							<option value="Velama">Velama</option>
							<option value="Vellalar">Vellalar</option>
							<option value="Veluthedathu Nair">Veluthedathu Nair</option>
							<option value="Vilakkithala Nair">Vilakkithala Nair</option>
							<option value="Vishwabrahmin">Vishwabrahmin</option>
							<option value="Vishwakarma">Vishwakarma</option>
							<option value="Vokkaliga">Vokkaliga</option>
							<option value="Vysya">Vysya</option>
							<option value="Yadav">Yadav</option>
							<option value="Yajurvedibrahmin">Yajurvedibrahmin</option>

					</select>
												<script type="text/javascript">
												  document.getElementById('caste').value = "<?php echo $_SESSION['caste'];?>";
												</script>
						</td>
					</tr>
					
					<tr width="100%"height="50px">
						<td width="35%" align="right">
							<label  for="sex" >Mother Tongue : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
							<select name="mothertounge" id="mothertounge">
								<option value="any"> Any </option>
								<option value="English">English</option>
								
								<option selected value="Hindi">Hindi</option>
								
							</select>
												<script type="text/javascript">
												  document.getElementById('mothertounge').value = "<?php echo $_SESSION['mothertounge'];?>";
												</script>
						</td>
					</tr>
					
					
					
					<tr width="100%"height="50px">
						<td width="40%" align="right" >
							<label  style="margin-top:30px;top: 50%;" for="sex" >Age : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
						<input type="hidden" name="agemin" id="agemin" />
						<input type="hidden" name="agemax" id="agemax" />
							  <!-- Javascript -->  
							  <script>  
								 $(function() {  
									$( "#slider-3" ).slider({  
									   range:true,  
									   min: 18,  
									   max: 80,  
									   values: [ 18, 80 ],  
									   slide: function( event, ui ) {  
											
										  $( "#price" ).val( "Min" + ui.values[ 0 ] + " - Max" + ui.values[ 1 ] );  
										  
										  document.getElementById("agemin").value= ui.values[0];
										  document.getElementById("agemax").value= ui.values[1];
										  document.getElementById("price2").hidden= true;
										  document.getElementById("price").hidden= false;
									   }  
								   });  
								 $( "#price" ).val( "Min" + $( "#slider-3" ).slider( "values", 0 ) +  
									" - Max " + $( "#slider-3" ).slider( "values", 1 ) );  
								 });  
							  </script>  
						   
							
							<input type="text" readonly id="price2" value="Min <?php echo $_SESSION['agemin'];?> - Max <?php echo $_SESSION['agemax'];?>" style="border:0; color:red; font-weight:bold;text-align:center;margin-bottom:5px">  
						 	 	
							<input type="text" hidden="true" readonly id="price" style="border:0; color:red; font-weight:bold;text-align:center;margin-bottom:5px">  
						 	 
							 <div id="slider-3"></div> 
					
						</td>
					</tr>
					<tr width="100%"height="50px">
						<td width="35%" align="right" >
							
						</td>
						 <td width="60%" style="padding-left: 20px;" align="center">
						
							 <input class="button_submit" type="submit" name="search2" value="Search"/>
						</td>
					</tr>
					
										
		</table>
	   
	  </form> 
	   
	   
      </div>
      <div class="col-sm-9 col-md-6 col-lg-8"style="padding:100px">
        
		<?php
			
			
			$sex=$_SESSION["sex"];
			
					include('db.php');
					if (isset($_GET['page_no']) && $_GET['page_no']!="") {
					$page_no = $_GET['page_no'];
					} else {
						$page_no = 1;
						}

					$total_records_per_page = 10;
					$offset = ($page_no-1) * $total_records_per_page;
					$previous_page = $page_no - 1;
					$next_page = $page_no + 1;
					$adjacents = "2"; 

					if($maritalstatus=="any" && $state=="any" && $religion=="any"){
								$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex'");
								$total_records = mysqli_fetch_array($result_count);
								$total_records = $total_records['total_records'];
								$total_no_of_pages = ceil($total_records / $total_records_per_page);
								$second_last = $total_no_of_pages - 1; // total page minus 1
								//echo $total_records;
								$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' LIMIT $offset, $total_records_per_page");
					
								
					}elseif($maritalstatus=="any" && $state=="any" && $religion!="any"){
								$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND religion = '$religion'");
								$total_records = mysqli_fetch_array($result_count);
								$total_records = $total_records['total_records'];
								$total_no_of_pages = ceil($total_records / $total_records_per_page);
								$second_last = $total_no_of_pages - 1; // total page minus 1
								//echo $total_records;
								$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND religion = '$religion' LIMIT $offset, $total_records_per_page");
					
								
					}elseif($maritalstatus=="any" && $state!="any" && $religion=="any"){
								$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND state = '$state'");
								$total_records = mysqli_fetch_array($result_count);
								$total_records = $total_records['total_records'];
								$total_no_of_pages = ceil($total_records / $total_records_per_page);
								$second_last = $total_no_of_pages - 1; // total page minus 1
								//echo $total_records;
								$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND state = '$state' LIMIT $offset, $total_records_per_page");
					
								
					}elseif($maritalstatus=="any" && $state!="any" && $religion!="any"){
						
										$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND state = '$state' AND religion = '$religion'");
										$total_records = mysqli_fetch_array($result_count);
										$total_records = $total_records['total_records'];
										$total_no_of_pages = ceil($total_records / $total_records_per_page);
										$second_last = $total_no_of_pages - 1; // total page minus 1
										//echo $total_records;
										$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND state = '$state' AND religion = '$religion' LIMIT $offset, $total_records_per_page");
					
										
					}elseif($maritalstatus!="any" && $state=="any" && $religion=="any"){
									$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND maritalstatus = '$maritalstatus'");
									$total_records = mysqli_fetch_array($result_count);
									$total_records = $total_records['total_records'];
									$total_no_of_pages = ceil($total_records / $total_records_per_page);
									$second_last = $total_no_of_pages - 1; // total page minus 1
									//echo $total_records;
									$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND maritalstatus = '$maritalstatus' LIMIT $offset, $total_records_per_page");
					
									
					}elseif($maritalstatus!="any" && $state=="any" && $religion!="any"){
						
									$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND maritalstatus = '$maritalstatus' AND religion = '$religion'");
									$total_records = mysqli_fetch_array($result_count);
									$total_records = $total_records['total_records'];
									$total_no_of_pages = ceil($total_records / $total_records_per_page);
									$second_last = $total_no_of_pages - 1; // total page minus 1
									//echo $total_records;
									$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND maritalstatus = '$maritalstatus' AND religion = '$religion' LIMIT $offset, $total_records_per_page");
					
									
					}elseif($maritalstatus!="any" && $state!="any" && $religion=="any"){
									$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND maritalstatus = '$maritalstatus' AND state = '$state'");
									$total_records = mysqli_fetch_array($result_count);
									$total_records = $total_records['total_records'];
									$total_no_of_pages = ceil($total_records / $total_records_per_page);
									$second_last = $total_no_of_pages - 1; // total page minus 1
									//echo $total_records;
									$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND maritalstatus = '$maritalstatus' AND state = '$state' LIMIT $offset, $total_records_per_page");
						
									
					}elseif($maritalstatus!="any" && $state!="any" && $religion!="any"){
									$result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND state = '$state' AND maritalstatus = '$maritalstatus' AND religion = '$religion'");
									$total_records = mysqli_fetch_array($result_count);
									$total_records = $total_records['total_records'];
									$total_no_of_pages = ceil($total_records / $total_records_per_page);
									$second_last = $total_no_of_pages - 1; // total page minus 1
									//echo $total_records;
									$result = mysqli_query($con,"SELECT * FROM `customer` WHERE age>='$agemin' AND age<='$agemax' AND sex='$sex' AND state = '$state' AND maritalstatus = '$maritalstatus' AND religion = '$religion' LIMIT $offset, $total_records_per_page");
				
									
					}
?>


<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php  if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
			} 
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
			} ?>
</ul>


<br /><br />

					
<?php
					
	$color_count=2;								
	if($result){
	    while($row = mysqli_fetch_array($result)){
					//$row=mysqli_fetch_assoc($result);
					$profileid=$row['cust_id'];
					$fname=$row['firstname'];
					$lname=$row['lastname'];
					$sex=$row['sex'];
					$dob=$row['dateofbirth'];
					$religion=$row['religion'];
					$caste = $row['caste'];
					
					$state=$row['state'];
					$district=$row['district'];
					//$age=$row['age'];
					$maritalstatus=$row['maritalstatus'];
					$profileby=$row['profilecreatedby'];
					$education=$row['education'];
					$edudescr=$row['education_sub'];
					
					$mothertounge=$row['mothertounge'];
					
					$weight=$row['weight'];
					$height=$row['height'];
					
					$occupation=$row['occupation'];
					$occupationdescr=$row['occupation_descr'];
					
					$aboutme=$row['aboutme'];
					
					$membership_status=$row['membership'];

					
					$age = (date('Y') - date('Y',strtotime($dob)));
					


				$sql2="SELECT * FROM photos WHERE cust_id = $profileid";
				$result2 = mysqlexec($sql2);
				if($result2){
					$row2=mysqli_fetch_array($result2);
					
					if($row2['pic1']==""){
						if($row['sex']=="Male"){
							
						$pic1="img/male.png";
						}else{
							$pic1="img/female.png";
						}
						
					}else
					{
						
						$pic1="profile/".$id."/".$row2['pic1'];
					}
					
					
					
					
	
	
	
	
					?>





    


<br>

                                                        <?php

                                                            if($color_count % 2==0){
                                                                
                                                        ?> 

															<table class="table_working_hours" style="background-color:#DFF0D8">
																	<?php }else {  ?>
                                                                    <table class="table_working_hours" style="background-color:#FFE1ED">
                                                                    <?php } ?>
                                                                    <tbody>

																	
																	<td class="day_value"><br><div style="font-size:22px;color:red;margin-left:10px;"><a href="view_profile.php?id=<?php echo $profileid ?>" style="color:red" target="_blank"><?php echo $fname . " " .$lname. " " ."(ES".$profileid.") "; ?></a></div>

																		<tr class="opened_1">

																			<td rowspan="8">
																				<img   style="width:200px;border-radius: 80%;" src="<?php echo $pic1;?>" />
																		    </td>
																			
																			
                                                                            </td>
																		</tr><tr class="opened_1">
																			<td class="day_label">Age :</td>
																			<td class="day_value"><?php echo $age . " Years"; ?> </td>
																		</tr>
																		</tr><tr class="opened_1">
																			<td class="day_label">Height :</td>
																			<td class="day_value"><?php echo $height . "";?> </td>
																		</tr>
																		<tr class="opened">
																			<td class="day_label">Religion :</td>
																			<td class="day_value"><?php echo $religion;?></td>
																		</tr>
																		<tr class="opened">
																			<td class="day_label">Marital Status :</td>
																			<td class="day_value"><?php echo $maritalstatus;?></td>
																		</tr>
																		<tr class="opened">
																			<td class="day_label">State :</td>
																			<td class="day_value"><?php echo $state;?></td>
																		</tr>
																		<tr class="closed">
																			<td class="day_label">Profile Created by :</td>
																			<td class="day_value closed"><span><?php echo $profileby;?></span></td>
																		</tr>
																		<tr class="closed">
																			<td class="day_label">Education :</td>
																			<td class="day_value closed"><span><?php echo $education;?></span></td>
																		</tr>
																		<tr class="closed" align="right">
																		<td align="right" colspan="3">
																		<!-- <input class="button_submit" align="right" type="submit" onClick="location.href='view_profile.php?id=<?php echo $profileid ?>'" name="search2" value="View Profile"/> -->
                                                                        <a href="view_profile.php?id=<?php echo $profileid ?>" target="_blank"><img src="images/view_profile.jpg"</a>
																		</td>
																		</tr>
																	</tbody>
																</table>
<br>


<?php  $color_count=$color_count+1;
				}
					}
		}else{
					echo "<script>alert(\"Database Connection Error\")</script>";
		}
		
		
		
		?>									
											
		

		
   

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
	<?php  if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
	<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
	</li>
       
    <?php 
	if ($total_no_of_pages <= 10){  	 
		for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
	}
	elseif($total_no_of_pages > 10){
		
	if($page_no <= 4) {			
	 for ($counter = 1; $counter < 8; $counter++){		 
			if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}
        }
		echo "<li><a>...</a></li>";
		echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
		echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
		}

	 elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {		 
		echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {			
           if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                  
       }
       echo "<li><a>...</a></li>";
	   echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
	   echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
		
		else {
        echo "<li><a href='?page_no=1'>1</a></li>";
		echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
		   echo "<li class='active'><a>$counter</a></li>";	
				}else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
				}                   
                }
            }
			} 
?>
    
	<li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
	<a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
	</li>
    <?php if($page_no < $total_no_of_pages){
		echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
			} ?>
</ul>


<br /><br />


													
									
											
											
											
											
		</div>
    </div>
  </div>
</div>
    
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