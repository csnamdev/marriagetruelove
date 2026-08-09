<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<?php require_once("includes/dbconn.php");?>
<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:login.php");
}


$sql="SELECT * FROM customer";
$result = mysqlexec($sql);
$id=$_GET['id'];

$sex="";

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
<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>


  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/ganesh.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">



<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">  
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
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

<!-- ============================  Navigation Start =========================== -->

<?php include_once("includes/header.php"); ?>
 
<!-- ============================  Navigation End ============================ -->

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
					<!-- <li class="breadcrumb-item"><a href="#"></a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Profile Id: MTL</li> -->
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->	 
 
   
  <div  style="width:100%">
    <div class="row">
      <div class="col-sm-3 col-md-6 col-lg-4" style="background-color:#D43C88;" >
<?php
//if(isset($_POST['search']) || isset($_POST['search2'])){

?>						
	   
	   
											
<?php
					if(isset($_POST['search']) || isset($_POST['search2'])){
                        
						unset($_SESSION['agemin']);
                       
						usleep( 2 * 1000 );
						
						$_SESSION["maritalstatus"] = $_POST['maritalstatus'];
					
                        
					}else{
						$_SESSION["maritalstatus"] = "30";
						
						
					
                        
                       
					}
						$sql_gender="SELECT gender FROM users where profilestat=1 and id=$id";
						$result_gender = mysqlexec($sql_gender);
						$row_gender= mysqli_fetch_assoc($result_gender);

						$gender_row=$row_gender['gender'];
					
						
						if($gender_row=="Female"){
						    $_SESSION["sex"]="Male";
						    $sex= $_SESSION['sex'];
						}else{
						    $_SESSION["sex"]="Female";
						    $sex= $_SESSION['sex'];
						}
						
						
					$cur_date=date("Y-m-d");
                    $t1=$_SESSION["maritalstatus"]." days";
                    $date=date_create($cur_date);
                    date_sub($date,date_interval_create_from_date_string($t1));
                    $d1= date_format($date,"Y-m-d");
                    //echo $d1;
                   // echo $cur_date;
                    //echo $sex;

			
			?>
			<form action="" method="post" style="padding:20px">
	   <center><label style="color:white;font-size:20px;text-align:center;width:50%" >Refine Your Search </label></center>
		<table>
					
					
					<tr width="100%"height="50px">
						<td width="35%" align="right">
							<label style="color:white;font-size:16px;" for="sex" >Number of Days : </label>
						</td>
						 <td width="60%" style="padding-left: 20px;">
							<select name="maritalstatus" id="maritalstatus" >
									<option value="30" selected="selected"> 30 </option>
									<option value="60">60</option>
								
									
									
							</select>
							<script type="text/javascript">
							  document.getElementById('maritalstatus').value = "<?php echo $_SESSION['maritalstatus'];?>";
							</script>
						</td>
					</tr>
					 
					<tr width="100%"height="50px">
						<td width="35%" align="right" >
							
						</td>
						 <td width="60%" style="padding-left: 20px;" align="center">
						
							 <input class="btn btn-primary solid" type="submit" name="search2" value="Search"/>
							 
						</td>
					</tr>
				
					
										
		</table>
	   
	  </form> 
	   
	   
      </div>
      <div class="col-sm-9 col-md-6 col-lg-8"style="padding:50px;background-image:url('images/bg2.jpg');background-size:cover;background-attachment:fixed">
        
		<?php
			
			
		
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

				
					    
					           
					            $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM customer WHERE profilestat=1 and `profilecreationdate` BETWEEN '$d1' and '$cur_date'  AND sex='$sex'");
								$total_records = mysqli_fetch_array($result_count);
								$total_records = $total_records['total_records'];
								
								$total_no_of_pages = ceil($total_records / $total_records_per_page);
								$second_last = $total_no_of_pages - 1; // total page minus 1
								
								 $result = mysqli_query($con,"SELECT * FROM customer WHERE profilestat=1 and `profilecreationdate` BETWEEN '$d1' and '$cur_date'  AND sex='$sex' ORDER BY cust_id DESC LIMIT $offset, $total_records_per_page");
								
				
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
					
//echo $row['profilecreationdate'];

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
						
						$pic1="profile/".$profileid."/".$row2['pic1'];
						//echo $pic1;
					}
					
					
					
					
	
	
	
	
					?>





    


<br>

                                                        <?php

                                                            if($color_count % 2==0){
                                                                
                                                        ?> 

															<table class="table_working_hours"width="100%" style="background-image:url('images/frame4.jpg');background-size: 820px 320px;background-repeat: no-repeat;background-position:center;border-radius: 25px;">
																	<?php }else {  ?>
                                                                    <table class="table_working_hours"width="100%" style="background-image:url('images/frame4.jpg');background-size: 820px 320px;background-repeat: no-repeat;background-position:center;border-radius: 25px;">
                                                                    <?php } ?>
                                                                    <tbody>

																	
																	<td class="day_value"><br><div style="font-size:22px;color:red;text-align:center;"><a href="view_profile.php?id=<?php echo $profileid ?>" style="color:red;" target="_blank"><?php echo "<br>".$fname . " " .$lname. " " ."(MTL".$profileid.") "; ?></a></div>

																		<tr class="opened_1">

																			<td rowspan="8">
																				<center><img   style="width:170px;height:200px;border-radius: 80%; " src="<?php echo $pic1;?>" /></center>
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
																		<!-- <input class="button_submit" align="right" type="submit" onClick="location.href='view_profile.php?id=<?php echo $profileid ?>'" name="search2" value="View Profile"/> 
                                                                        <a href="view_profile.php?id=<?php echo $profileid ?>" target="_blank"><img src="images/view_profile.jpg"</a> -->
																		<a href="view_profile.php?id=<?php echo $profileid ?>" target="_blank" class="btn btn-primary solid">View Profile</a>
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
    



  



	<!-- Footer start -->
	<?php include_once("includes/footer.php"); ?>
     <!-- Footer end -->


	<!-- Copyright start -->
	<?php include_once("includes/copyright.php"); ?>	
	<!--/ Copyright end -->

</div><!-- Body inner end -->


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