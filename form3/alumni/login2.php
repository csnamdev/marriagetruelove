<?php
 





function temp_call(){
	include("../class/users.php");
$qur="select * from registration ";
$run_pro=mysqli_query($con,$qur);
$cout=mysqli_num_rows($run_pro);
	 
	  
	while($xy=mysqli_fetch_array($run_pro)){
	?>
	<div class="row">
	 	<div class="col-sm-8" >
			<table class="table table-hover">
				<tbody>
					<thead>
						<tr>
						<th>Student Information</th>
						</tr>
					</thead>
					<tr>
						<td>Name:</td>
						<td><?php echo $xy['name']; ?></td>
						<td></td>
					</tr>
					<tr>
						<td>Father Name:</td>
						<td><?php echo $xy['father_name']; ?></td>
						<td></td>
       
					</tr>
				
					<tr>
						<td>Date of Birth:</td>
						<td><?php echo $xy['birth_date']; ?></td>
						<td></td>
					</tr>
					<tr>
						<td>Passing Year:</td>
						<td><?php echo $xy['passing_year']; ?></td>
						<td></td>
       
					</tr>
					<tr>
						<td>Mobile No:</td>
						<td><?php echo $xy['mob_no']; ?></td>
        
					</tr>
					<tr>
						<td>Email Id:</td>
						<td><?php echo $xy['email']; ?></td>
        
					</tr>
					<tr>
						<td>Currently Associated With:</td>
						<td><?php echo $xy['add1']; ?><br>
							<?php echo $xy['add2']; ?><br>
							<?php echo $xy['add3']; ?>
				
				
						</td>
        
					</tr>
				
					<tr>
						<td>Status:</td>
						<td><?php 
				
							if($xy['status']==0){
								echo "Unapproved"; 
								}else
								{
									echo "Approved";
								}
					
					
					
					
						?></td>
        
					</tr>
				
				</tbody>
			</table>

		</div>
  
			<div class="col-sm-4">
				
                <center><img src="../alumini_images/<?php echo $xy['img'] ?>" style="margin-top:20px"    	width="200" height="200"></center>
            
			</div>
  
	</div>
	
</div>

<?php } }?>


	
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
 <div class="container">
  <h2>Online Examination System</h2>
  

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Unapproved</a></li>
    <li><a data-toggle="tab" href="#menu2">Exam</a></li>
    <li><a data-toggle="tab" href="#menu3">Result</a></li>
    <li style="float:right"><a href="index.php">Logout</a></li>
  </ul>
  
<br><br>
 <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     
<?php temp_call(); ?>
    
    
    
   
    
    
    <div id="menu2" class="tab-pane fade">
      <h3>Avaliable Exam</h3>
      <p>Select the Exam:</p>
    </div>
    
  </div>
</div>



</body>