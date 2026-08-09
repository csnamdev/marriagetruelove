<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">
	 <!-- <a class="navbar-brand navbar-bg" href="index.php"><img class="img-fluid float-right" src="images/logo4.png" alt="logo"/></a> -->
	  <a  href="index.php"><img class="img-fluid float-left" style="padding:20px;" src="images/logo5.png" alt="logo"/></a> 
	  <div style="text-align:right;color:white;margin-top:20px;margin-right:50px;">Call: +91 8188973634 <img src="img/what2.png" style="width:20px;height:20px" /> 8188973634</div>
	<div class="container" style="margin-top:-18px">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
				
					
				
				
					<li class="nav-item">
						<?php 
				      if(isloggedin()){
						  $id=$_SESSION['id'];
						  ?>
						  	
		    		<li><a class="nav-link" href="userhome.php?id=$id" style="font-size:18px">Dashboard</a></li>
						
						 <?php
					  }
					?>
					</li>
					<!--<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Home
						</a>
						<div class="dropdown-menu">
						
						
					
					
							<a class="dropdown-item" href="index.php">Home</a>
							<a class="dropdown-item" href="register.php">Register</a>
							<a class="dropdown-item" href="userhome.php">User Home</a>
							<a class="dropdown-item" href="view_profile.php">View profile</a>
							<a class="dropdown-item" href="pricing.php">Membership</a>
							<a class="dropdown-item" href="index.html">Homepage 1</a>
							<a class="dropdown-item" href="index-2.html">Homepage 2</a>
							<a class="dropdown-item" href="index-3.html">Homepage 3</a>
							<a class="dropdown-item" href="index-4.html">Homepage 4</a>
						</div>
					</li>-->
					
					
					
					
					
					<?php 
				      if(!isloggedin()){
						  
						  ?>
						  <li class="nav-item">
						
		    		<li><a class="nav-link" href="index.php" style="font-size:18px">Home</a></li>
						
						
					</li>
					
						<li class="nav-item">
						
		    		<li><a class="nav-link" href="login.php" style="font-size:18px">Login</a></li>
						
						
					</li>
						
					<li class="nav-item">
						
		    		<li><a class="nav-link" href="register.php" style="font-size:18px">Registration</a></li>
						
						
					</li>
					
					  <?php  }  ?>
					  
					  <li class="nav-item">
						<a class="nav-link" href="pricing.php" style="font-size:18px">Membership</a></a>
					</li>
					
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false" style="font-size:18px">
							Search
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="view_profile_search.php?id=$id"style="font-size:18px">Regular Search</a>
						    <a class="dropdown-item" href="view_profile_day_search.php "style="font-size:18px">By Days</a> 
							
						</div>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact.php"style="font-size:18px">Contact</a></a>
					</li>
					
					
					
					<li class="nav-item">
						<?php 
				      if(isloggedin()){
						  $id=$_SESSION['id'];
						  ?>
		    		<li><a class="nav-link" href="logout.php?id=$id"style="font-size:18px">Logout</a></li>
		    		
						
						 <?php
					  }
					?>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->