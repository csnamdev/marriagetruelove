<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> 
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> 
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
<title>Gyanodaya School Khurai</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" >
<meta charset="UTF-8">
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800' rel='stylesheet' type='text/css'>

<!-- CSS Bootstrap & Custom -->
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="../css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="../css/animate.css" rel="stylesheet" media="screen">
<link href="../style.css" rel="stylesheet" media="screen">

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="../images/ico/favicon.ico">

<!-- JavaScripts -->
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="../js/modernizr.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script> 
<script src="j../s/plugins.js"></script> 
<script src="../js/custom.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>	
<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
        </div>
    <![endif]-->
</head>
<body background-color: #5A68A5>
<?php include('header2.php'); ?>
<?php if(isset($_GET['page']) && file_exists($_GET['page'].".php")) { 
	
							
								include($_GET['page'].".php"); 

			
		} else if(isset($_GET['page']) && !file_exists($_GET['page'].".php"))	{ ?>
<div class="container">
  <div class="row"> 
    <!-- Here begin Main Content -->
    <div class="col-md-8">
      <div class="row">
        <div class="col-md-12">
          <div class="widget-item">
            <h2 class="welcome-text"><?php echo strtoupper($_GET['page']); ?></h2>
            <strong>Under Construction</strong>"; </div>
          <!-- /.widget-item --> 
        </div>
        <!-- /.col-md-12 --> 
      </div>
      <!-- /.row --> 
    </div>
    <!-- /.col-md-8 --> 
    
    <!-- Here begin Sidebar -->
    <div class="col-md-4">
      
    </div>
  </div>
</div>
<?php } else { ?>
<div class="container">
  <div style="margin-top:80px" class="row">
  <center>
		<form method="post" action="login.php">
				
				<div class="field">
					<label>Username</label>
                    <input style="margin-left:15px" type = "text" name = "username" required="yes" value = "">
                 </div>
				<div class="field">
					<label>Password</label>
                    <input style="margin-left:15px;margin-top:15px"  type = "password" name = "pwd" required="yes" value = "">
                 </div>
				<div class="field">
					<input style="margin-left:15px;margin-top:15px" type="submit" name = "submit" class = "button" value="Login Now!"/>				
				</div>
				
			</form>
    </center>
  </div>
</div>

<?php } ?>

<!-- begin The Footer -->


</body>
</html>

<?php
if(isset($_POST['submit']))
{    session_start();
    $_SESSION['timestamp']=time();
	if(isset($_SESSION['username'])){
		echo "<script>location.href='index.php?page=all'</script>";
	
	}
	else{
		
		

	extract($_POST);
	if($username=="administrator" && $pwd=="king@123"){
		$_SESSION['username']="administrator";
		$_SESSION['timestamp']=time();
		echo "<script>location.href='index.php?page=all'</script>";
		//all_out();
		
	}else{
		echo "<script>alert('username password incorrect')</script>";
		echo "<script>location.href='login.php'</script>";
		}
	}
}
?>

<?php

