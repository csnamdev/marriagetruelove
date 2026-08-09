<?php
include("../class/users.php");
if(isset($_GET['stu_id'])){
    $temp=$_GET['stu_id'];
    $update_stu="UPDATE `gurukulkhurai_alumni`.`registration` SET `status` = '1' WHERE `registration`.`ID` = '$temp';";
    
    
    $run_pro=mysqli_query($con,$update_stu);
    
	if($run_pro){
			echo "<script>alert('Student Approved Sucessfully')</script>";
			
			
			
			
			
			
			}	
}
if(isset($_SESSION['username'])){


	
	
	
	
include("../class/users.php");
$qur="select * from registration ";
$run_pro=mysqli_query($con,$qur);
$cout=mysqli_num_rows($run_pro);
	 
	  
	while($xy=mysqli_fetch_array($run_pro)){
		if($xy['status']==1){
	?>
	
	<div class="row" style="margin-left:80px">
	 	<div class="col-sm-6"  >
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
  
			<div class="col-sm-6">
				
                <center><img src="../alumini_images/<?php echo $xy['img'] ?>" style="margin-top:20px"  style="align:right"  	width="200" height="200"></center>
            
			</div>
  
	</div>
	
</div>

<?php } }}
else{
	echo "<script>location.href='login.php'</script>";
	
}


?>