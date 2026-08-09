<?php include("include/functions.php"); ?>
<?php

$id=$_GET['id'];
form1();
?>

<?php
function form1(){
				require_once("include/dbconn.php");
				$id=$_GET['id'];
				$sql2="SELECT * FROM student_admission WHERE id='$id'";
				$result2=mysqlexec($sql2);
				if($result2)
				{	
					$row=mysqli_fetch_assoc($result2);
					
					$fname=$row['fname'];
					$mname=$row['mname'];
					$lname=$row['lname']; 
					$stu_class=$row['stu_class'];
					$dob=$row['dob'];
					$gender=$row['gender'];
					$religion=$row['religion'];
					$caste=$row['caste'];
					$mother_tongue=$row['mother_tongue'];
					$blood_group=$row['blood_group'];
					$boarding_cat=$row['boarding_cat'];
					$school_bus=$row['school_bus'];
					$emg_number=$row['emg_number'];
					$email_id=$row['email_id'];
					
					if($row['stu2_photo']==""){
						$stu2_photo="dummy.png";
						
					}else{
						$stu2_photo=$row['stu2_photo'];
					}
					
					
					
					$aadhar_no=$row['aadhar_no'];
					$sssmid=$row['sssmid'];
					$family_sssmid=$row['family_sssmid'];
					$account_no=$row['account_no'];
					$account_holder_name=$row['account_holder_name'];					
					$bank_name=$row['bank_name'];
					$bank_branch=$row['bank_branch'];
					$bank_ifsc=$row['bank_ifsc'];
					
					
					
					$pre_address=$row['pre_address'];
					$pre_tehsil=$row['pre_tehsil'];
					$pre_city=$row['pre_city'];
					$pre_distict=$row['pre_distict'];
					$pre_state=$row['pre_state'];
					$pre_pincode=$row['pre_pincode'];
					$per_address=$row['per_address'];
					$per_tehsil=$row['per_tehsil'];
					$per_city=$row['per_city'];
					$per_distict=$row['per_distict'];
					$per_state=$row['per_state'];
					$per_pincode=$row['per_pincode'];
					$father_name=$row['father_name'];
					$father_occupation=$row['father_occupation'];
					$father_org=$row['father_org'];
					$father_qualification=$row['father_qualification'];
					$father_designation=$row['father_designation'];
					$father_income=$row['father_income'];
					if($row['father_photo']==""){
						$father_photo="dummy.png";
						
					}else{
						$father_photo=$row['father_photo'];
					}
					
					
					
					$father_mobno=$row['father_mobno'];
					$father_whatsapp=$row['father_whatsapp'];
					$mother_name=$row['mother_name'];
					$mother_occupation=$row['mother_occupation'];
					$mother_org=$row['mother_org'];
					$mother_qualification=$row['mother_qualification'];
					$mother_designation=$row['mother_designation'];
					$mother_income=$row['mother_income'];
					if($row['mother_photo']==""){
						$mother_photo="dummy.png";
						
					}else{
						$mother_photo=$row['mother_photo'];
					}
					
					$mother_mobno=$row['mother_mobno'];
					$mother_whatsapp=$row['mother_whatsapp'];
					$guardian_name=$row['guardian_name'];
					$guardian_mobno=$row['guardian_mobno'];
					$guardian_relation=$row['guardian_relation'];
					$guardian_address=$row['guardian_address'];
					if($row['guardian_photo']==""){
						$guardian_photo="dummy.png";
						
					}else{
						$guardian_photo=$row['guardian_photo'];
					}
					
					
					if($row['parents_sign_img']==""){
						$parents_sign_img="BLANK_SIGN.png";
						
					}else{
						$parents_sign_img=$row['parents_sign_img'];
					}
					$form_submit_date=$row['form_submit_date'];		
	?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  
  width: 100%;
}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding:4px;
}


</style>
</head>
<body>



<table>
	<tr>
	<td colspan="6">
	<center>
	 <img src="images/header2.jpg" width="100%" height="220px" >
	</center>
	</td>
</tr>
	<tr>
    <td width="100%" colspan="6"><h3>Student Information</h3></td>
	</tr>
  <tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $fname." ".$mname." ".$lname; ?></td>
    <td width="12%" style="text-align:right">Class:</td>
	<td width="23%"><?php echo $stu_class; ?></td>
   <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $stu2_photo ?> " width="120px" height="120px"></center></td>
  </tr>
   <tr>
    <td width="12%" style="text-align:right">Date of Birth::</td>
	<td width="23%"><?php echo $dob; ?></td>
    <td width="12%" style="text-align:right">Gender:</td>
	<td width="23%"><?php echo $gender; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Religion:</td>
	<td width="23%"><?php echo $religion; ?></td>
    <td width="12%" style="text-align:right">Caste:</td>
	<td width="23%"><?php echo $caste; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Mother Tongue:</td>
	<td width="23%"><?php echo $mother_tongue; ?></td>
    <td width="12%" style="text-align:right">Blood Group:</td>
	<td width="23%"><?php echo $blood_group; ?></td>
	</tr>

	<tr>
    
	<td width="12%" style="text-align:right">Boarding Category:</td>
	<td width="23%"><?php echo $boarding_cat; ?></td>
    <td width="10%" style="text-align:right" >School Bus</td>
	<td width="20%" ><?php echo $school_bus; ?></td>
  </tr>
  
   <tr>
   
   <td width="12%" style="text-align:right">Emergency Number::</td>
	<td width="23%"><?php echo $emg_number; ?></td>
     <td width="12%" style="text-align:right">Email-Id:</td>
	<td width="23%"><?php echo $email_id; ?></td>
  </tr>
  
   <tr>
     <td width="10%" style="text-align:right" >Aadhar Number:</td>
	<td width="20%" ><?php echo $aadhar_no; ?></td>
     <td width="12%" style="text-align:right">SSSMID:</td>
	<td width="23%"><?php echo $sssmid; ?></td>
     <td width="10%" style="text-align:right" >Family SSSMID</td>
	<td width="20%" ><?php echo $family_sssmid; ?></td>
  </tr>
  
   <tr>
   <td width="100%" colspan="6"><h3>Bank Account Details</h3></td>
	</tr>
	
	<tr>
     <td width="10%" style="text-align:right" >A/C No.:</td>
	<td width="20%" ><?php echo $account_no; ?></td>
     <td width="12%" style="text-align:right">A/C Holder Name:</td>
	<td width="23%"><?php echo $account_holder_name; ?></td>
     <td width="10%" style="text-align:right" >Bank Name:</td>
	<td width="20%" ><?php echo $bank_name; ?></td>
  </tr>
  <tr>
     <td width="10%" style="text-align:right" >Branch Name:</td>
	<td width="20%" ><?php echo $bank_branch; ?></td>
     <td width="12%" style="text-align:right">IFSC Code:</td>
	<td width="23%"><?php echo $bank_ifsc; ?></td>
     <td width="10%" style="text-align:right" ></td>
	<td width="20%" ></td>
  </tr>
  
	<tr>
    <td width="100%" colspan="6"><h3>Present Address</h3></td>
	</tr>
	
	<tr>
     <td width="10%" style="text-align:right" >Address:</td>
	<td width="20%" ><?php echo $pre_address; ?></td>
     <td width="12%" style="text-align:right">Tehsil:</td>
	<td width="23%"><?php echo $pre_tehsil; ?></td>
     <td width="10%" style="text-align:right" >City:</td>
	<td width="20%" ><?php echo $pre_city; ?></td>
  </tr>
  <tr>
     <td width="10%" style="text-align:right" >Distict:</td>
	<td width="20%" ><?php echo $pre_distict; ?></td>
     <td width="12%" style="text-align:right">State:</td>
	<td width="23%"><?php echo $pre_state; ?></td>
     <td width="10%" style="text-align:right" >Pin Code:</td>
	<td width="20%" ><?php echo $pre_pincode; ?></td>
  </tr>
  <tr>
   <td width="100%" colspan="6"><h3>Permanent Address</h3></td>
	</tr>
	
	<tr>
     <td width="10%" style="text-align:right" >Address:</td>
	<td width="20%" ><?php echo $per_address; ?></td>
     <td width="12%" style="text-align:right">Tehsil:</td>
	<td width="23%"><?php echo $per_tehsil; ?></td>
     <td width="10%" style="text-align:right" >City:</td>
	<td width="20%" ><?php echo $per_city; ?></td>
  </tr>
  <tr>
     <td width="10%" style="text-align:right" >Distict:</td>
	<td width="20%" ><?php echo $per_distict; ?></td>
     <td width="12%" style="text-align:right">State:</td>
	<td width="23%"><?php echo $per_state; ?></td>
     <td width="10%" style="text-align:right" >Pin Code:</td>
	<td width="20%" ><?php echo $per_pincode; ?></td>
  </tr>
  
  <tr>
   <td width="100%" colspan="6"><h3>Father Information</h3></td>
	</tr>
	
	<tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $father_name; ?>:</td>
    <td width="12%" style="text-align:right">Occupation:</td>
	<td width="23%"><?php echo $father_occupation; ?></td>
    <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $father_photo ?> " width="120px" height="120px"></center></td>
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Designation::</td>
	<td width="23%"><?php echo $father_designation; ?></td>
    <td width="12%" style="text-align:right">Organization:</td>
	<td width="23%"><?php echo $father_org; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Income:</td>
	<td width="23%"><?php echo $father_income; ?></td>
    <td width="12%" style="text-align:right">Mobile No.:</td>
	<td width="23%"><?php echo $father_mobno; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Whatsapp No.:</td>
	<td width="23%"><?php echo $father_whatsapp; ?></td>
   	</tr>

  <tr>
   <td width="100%" colspan="6"><h3>Mother Information</h3></td>
	</tr>
	
	<tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $mother_name; ?>:</td>
    <td width="12%" style="text-align:right">Occupation:</td>
	<td width="23%"><?php echo $mother_occupation; ?></td>
    <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $mother_photo ?> " width="120px" height="120px"></center></td>
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Designation::</td>
	<td width="23%"><?php echo $mother_designation; ?></td>
    <td width="12%" style="text-align:right">Organization:</td>
	<td width="23%"><?php echo $mother_org; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Income:</td>
	<td width="23%"><?php echo $mother_income; ?></td>
    <td width="12%" style="text-align:right">Mobile No.:</td>
	<td width="23%"><?php echo $mother_mobno; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Whatsapp No.:</td>
	<td width="23%"><?php echo $mother_whatsapp; ?></td>
   	</tr>
	
	<tr>
   <td width="100%" colspan="6"><h3>Guardian Information</h3></td>
	</tr>
	
	<tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $guardian_name; ?>:</td>
    <td width="12%" style="text-align:right">Relation:</td>
	<td width="23%"><?php echo $guardian_relation; ?></td>
    <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $guardian_photo ?> " width="120px" height="120px"></center></td>
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Mobile No.:</td>
	<td width="23%"><?php echo $guardian_mobno; ?></td>
    <td width="12%" style="text-align:right">Address:</td>
	<td width="23%"><?php echo $guardian_address; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right"></td>
	<td width="23%"></td>
    <td width="12%" style="text-align:right"></td>
	<td width="23%"></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right"></td>
	<td width="23%"></td>
   	</tr>
</table><br>
I have applied for admission of my son/daughter in Your school name. I have read and understood the rules of school. I assure to abide by all the rules, school will have the right to struck off the name of my son/daughter from the rolls.</p>
<br>
<p>Date:<?php echo " ".date("d/m/y") ?></p>

<p>Place:<?php echo " ".$per_city; ?></p>
<p style="text-align:right;margin-top:-100px;margin-right:20px"><img src="images2/<?php echo $parents_sign_img ?> " width="180px" height="80px"><p>

<p style="text-align:right;margin-right:80px;">Signature</p><br>
				
<br>

<center>
<a href="http://chandrashekhar.rf.gd/form/online_examination/"><img src="images/button_entrance.jpg"  width="180px" height="40px"></a></center>
</body>
</html>

<?php	
				}
}
?>