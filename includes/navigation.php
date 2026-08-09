<!-- ============================  Navigation Start =========================== -->
 <div class="navbar navbar-inverse-blue navbar">
    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
	      
      <div class="navbar-inner navbar-inner_1">
	  
        <div class="container">
		
			
           <a class="brand" href="index.php"><img src="img/evershine_logo.png" style="height:45px;width:70px" alt="logo"></a>
          <a class="brand" href="index.php"><img src="images/logo.png" style="height:50px;margin-left:10px;" alt="logo"></a>
          
		  <div class="pull-right">
          	<nav class="navbar nav_bottom" role="navigation">
 
		 <!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header nav_2">
		      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#"></a>
		   </div> 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
		        <ul class="nav navbar-nav nav_1">
					
					<?php 
				      if(isloggedin()){
						  $id=$_SESSION['id'];
						  ?>
		    		<li><a href="userhome.php?id=$id">Dashboard</a></li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                
		              </ul>
		            </li>
					
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="photouploader.php?id=<?php echo $id;?>">Upload Photos</a></li>
		               <li><a href="view_profile.php?id=<?php echo $id;?>">View Profile</a></li>
		               <!-- <li><a href="create_profile.php?id=<?php //echo $id;?>">Edit Profile</a></li>   -->
					   <li><a href="register_profile.php?id=<?php echo $id;?>">Edit Profile</a></li>  
		                <li><a href="membership.php?id=<?php echo $id;?>">Upgrade Membership</a></li>
		              </ul>
		            </li>
					
					
					<li><a href="logout.php">Logout</a></li>
					  <?php
					  }else{
					?>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Search<span class="caret"></span></a>
		              <ul class="dropdown-menu" role="menu">
		                <li><a href="search.php">Regular Search</a></li>
		                <li><a href="search-id.php">Search By Profile ID</a></li>
		                <li><a href="faq.php">Faq</a></li>
		                
		              </ul>
		            </li>
					
		            <li><a href="login.php">Login</a></li>
					<li><a href="membership2.php">Membership</a></li>
		            <li><a href="register.php">Registration</a></li>
					<?php
					  }
					  ?>
		            
		        </ul>
		     </div><!-- /.navbar-collapse -->
		    </nav>
		   </div> <!-- end pull-right -->
          <div class="clearfix"> </div>
        </div> <!-- end container -->
      </div> <!-- end navbar-inner -->
    </div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->