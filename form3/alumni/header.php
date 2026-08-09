<?php
session_start();
	if(isset($_SESSION['username'])){
		?>
<!-- This one in here is responsive menu for tablet and mobiles -->

<body bgcolor="red">
<div class="responsive-navigation visible-sm visible-xs" > <a href="#" class="menu-toggle-btn"> <i class="fa fa-bars"></i> </a>
  <div class="responsive_menu">
    
    
    <li><a href="index.php?page=home">Alumni</a></li>
            
                <li><a href="index.php?page=alumni">Registration</a></li>
              
           
          
         
    
    <!-- /.main_menu -->
    
  </div>
  <!-- /.responsive_menu --> 
</div>
<!-- /responsive_navigation -->

<header class="site-header">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="logo"> <a href="../index.php" title="Gyanoday School Khurai" rel="home"> <img src="/images/gsmvm-logo-white.png" width = "100" alt="Gyanoday School Khurai"> </a>
          <h1>Gyanodaya Sarva Mangal Vidya Mandir</h1>
        </div>
        <!-- /.logo --> 
      </div>
      <!-- /.header-left -->
      
      <div class="col-md-3 header-right"> </div>
      <!-- /.header-right --> 
    </div>
  </div>
  <!-- /.container -->
  
  <div class="nav-bar-main" role="navigation">
    <div class="container">
      <nav class="main-navigation clearfix visible-md visible-lg" role="navigation">
        <ul class="main-menu sf-menu">
          
           
          
          <li><a href="index.php?page=all">Home</a></li>
            
                <li><a href="index.php?page=approved">Approved</a></li>
				<li><a href="index.php?page=unapproved">Unapproved</a></li>
				<li style="align=left"><a href="logout.php">Logout</a></li>
         
     </li>
        </ul>
        <!-- /.main_menu -->
        
      
        <!-- /.social-icons --> 
      </nav>
      <!-- /.main-navigation --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.nav-bar-main --> 
  
</header>
<!-- /.site-header --></body>

	<?php } ?>