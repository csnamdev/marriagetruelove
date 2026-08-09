<?php include("include/functions.php"); ?>
<?php

if(isset($_POST['submit_alumini']))
{		if (isset($_POST['declaration']))
		{
				if($_POST['fname']=="")
				{
					//echo '<script type="text/javascript">alert("' . "Fill all the required fields" . '")</script>';
					
				}
				new_insert();
				//form1();
				
		}else{
			echo '<script type="text/javascript">alert("Kindly checked decleration checkbox!");</script>';
			echo '<script type="text/javascript"> window.history.back(); </script>';
		}
}
?>

<?php
function form1(){
	
	extract($_POST);
	$img_name=$_FILES['stu2_photo']['name'];
	$tmp_name=$_FILES['stu2_photo']['tmp_name'];
	move_uploaded_file($tmp_name,"images2/$img_name");
	
	
	$img_father=$_FILES['father_photo']['name'];
	$tmp_father=$_FILES['father_photo']['tmp_name'];
	move_uploaded_file($tmp_father,"images2/$img_father");
	
	
	$img_mother=$_FILES['mother_photo']['name'];
	$tmp_mother=$_FILES['mother_photo']['tmp_name'];
	move_uploaded_file($tmp_mother,"images2/$img_mother");
	
	
	$img_other=$_FILES['guardian_photo']['name'];
	$tmp_other=$_FILES['guardian_photo']['tmp_name'];
	move_uploaded_file($tmp_other,"images2/$img_other");
	
	$img_sign=$_FILES['parents_sign_img']['name'];
	$tmp_sign=$_FILES['parents_sign_img']['tmp_name'];
	move_uploaded_file($tmp_sign,"images2/$img_sign");
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
	<img src="images/header.jpg" width="100%" height="220px" >
	</center>
	</td>
</tr>
	<tr>
    <td width="100%" colspan="6"><h3>Student Information</h3></td>
	</tr>
  <tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $_POST['fname']." ".$_POST['mname']." ".$_POST['lname']; ?></td>
    <td width="12%" style="text-align:right">Class:</td>
	<td width="23%"><?php echo $_POST['stu_class']; ?></td>
   <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $img_name ?> " width="120px" height="120px"></center></td>
  </tr>
   <tr>
    <td width="12%" style="text-align:right">Date of Birth::</td>
	<td width="23%"><?php echo $_POST['dob']; ?></td>
    <td width="12%" style="text-align:right">Gender:</td>
	<td width="23%"><?php echo $_POST['gender']; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Religion:</td>
	<td width="23%"><?php echo $_POST['religion']; ?></td>
    <td width="12%" style="text-align:right">Caste:</td>
	<td width="23%"><?php echo $_POST['caste']; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Mother Tongue:</td>
	<td width="23%"><?php echo $_POST['mother_tongue']; ?></td>
    <td width="12%" style="text-align:right">Blood Group:</td>
	<td width="23%"><?php echo $_POST['blood_group']; ?></td>
	</tr>

	<tr>
    
	<td width="12%" style="text-align:right">Boarding Category:</td>
	<td width="23%"><?php echo $_POST['boarding_cat']; ?></td>
    <td width="10%" style="text-align:right" >School Bus</td>
	<td width="20%" ><?php echo $_POST['school_bus']; ?></td>
  </tr>
  
   <tr>
   
   <td width="12%" style="text-align:right">Emergency Number::</td>
	<td width="23%"><?php echo $_POST['emg_number']; ?></td>
     <td width="12%" style="text-align:right">Email-Id:</td>
	<td width="23%"><?php echo $_POST['email_id']; ?></td>
  </tr>
  
   <tr>
     <td width="10%" style="text-align:right" >Aadhar Number:</td>
	<td width="20%" ><?php echo $_POST['aadhar_no']; ?></td>
     <td width="12%" style="text-align:right">SSSMID:</td>
	<td width="23%"><?php echo $_POST['sssmid']; ?></td>
     <td width="10%" style="text-align:right" >Family SSSMID</td>
	<td width="20%" ><?php echo $_POST['family_sssmid']; ?></td>
  </tr>
  
   <tr>
   <td width="100%" colspan="6"><h3>Bank Account Details</h3></td>
	</tr>
	
	<tr>
     <td width="10%" style="text-align:right" >A/C No.:</td>
	<td width="20%" ><?php echo $_POST['account_no']; ?></td>
     <td width="12%" style="text-align:right">A/C Holder Name:</td>
	<td width="23%"><?php echo $_POST['account_holder_name']; ?></td>
     <td width="10%" style="text-align:right" >Bank Name:</td>
	<td width="20%" ><?php echo $_POST['bank_name']; ?></td>
  </tr>
  <tr>
     <td width="10%" style="text-align:right" >Branch Name:</td>
	<td width="20%" ><?php echo $_POST['bank_branch']; ?></td>
     <td width="12%" style="text-align:right">IFSC Code:</td>
	<td width="23%"><?php echo $_POST['bank_ifsc']; ?></td>
     <td width="10%" style="text-align:right" ></td>
	<td width="20%" ></td>
  </tr>
  
	<tr>
    <td width="100%" colspan="6"><h3>Present Address</h3></td>
	</tr>
	
	<tr>
     <td width="10%" style="text-align:right" >Address:</td>
	<td width="20%" ><?php echo $_POST['pre_address']; ?></td>
     <td width="12%" style="text-align:right">Tehsil:</td>
	<td width="23%"><?php echo $_POST['pre_tehsil']; ?></td>
     <td width="10%" style="text-align:right" >City:</td>
	<td width="20%" ><?php echo $_POST['pre_city']; ?></td>
  </tr>
  <tr>
     <td width="10%" style="text-align:right" >Distict:</td>
	<td width="20%" ><?php echo $_POST['pre_distict']; ?></td>
     <td width="12%" style="text-align:right">State:</td>
	<td width="23%"><?php echo $_POST['pre_state']; ?></td>
     <td width="10%" style="text-align:right" >Pin Code:</td>
	<td width="20%" ><?php echo $_POST['pre_pincode']; ?></td>
  </tr>
  <tr>
   <td width="100%" colspan="6"><h3>Permanent Address</h3></td>
	</tr>
	
	<tr>
     <td width="10%" style="text-align:right" >Address:</td>
	<td width="20%" ><?php echo $_POST['per_address']; ?></td>
     <td width="12%" style="text-align:right">Tehsil:</td>
	<td width="23%"><?php echo $_POST['per_tehsil']; ?></td>
     <td width="10%" style="text-align:right" >City:</td>
	<td width="20%" ><?php echo $_POST['per_city']; ?></td>
  </tr>
  <tr>
     <td width="10%" style="text-align:right" >Distict:</td>
	<td width="20%" ><?php echo $_POST['per_distict']; ?></td>
     <td width="12%" style="text-align:right">State:</td>
	<td width="23%"><?php echo $_POST['per_state']; ?></td>
     <td width="10%" style="text-align:right" >Pin Code:</td>
	<td width="20%" ><?php echo $_POST['per_pincode']; ?></td>
  </tr>
  
  <tr>
   <td width="100%" colspan="6"><h3>Father Information</h3></td>
	</tr>
	
	<tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $_POST['father_name']; ?>:</td>
    <td width="12%" style="text-align:right">Occupation:</td>
	<td width="23%"><?php echo $_POST['father_occupation']; ?></td>
    <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $img_father ?> " width="120px" height="120px"></center></td>
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Designation::</td>
	<td width="23%"><?php echo $_POST['father_designation']; ?></td>
    <td width="12%" style="text-align:right">Organization:</td>
	<td width="23%"><?php echo $_POST['father_org']; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Income:</td>
	<td width="23%"><?php echo $_POST['father_income']; ?></td>
    <td width="12%" style="text-align:right">Mobile No.:</td>
	<td width="23%"><?php echo $_POST['father_mobno']; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Whatsapp No.:</td>
	<td width="23%"><?php echo $_POST['father_whatsapp']; ?></td>
   	</tr>

  <tr>
   <td width="100%" colspan="6"><h3>Mother Information</h3></td>
	</tr>
	
	<tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $_POST['mother_name']; ?>:</td>
    <td width="12%" style="text-align:right">Occupation:</td>
	<td width="23%"><?php echo $_POST['mother_occupation']; ?></td>
    <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $img_mother ?> " width="120px" height="120px"></center></td>
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Designation::</td>
	<td width="23%"><?php echo $_POST['mother_designation']; ?></td>
    <td width="12%" style="text-align:right">Organization:</td>
	<td width="23%"><?php echo $_POST['mother_org']; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Income:</td>
	<td width="23%"><?php echo $_POST['mother_income']; ?></td>
    <td width="12%" style="text-align:right">Mobile No.:</td>
	<td width="23%"><?php echo $_POST['mother_mobno']; ?></td>
    
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Whatsapp No.:</td>
	<td width="23%"><?php echo $_POST['mother_whatsapp']; ?></td>
   	</tr>
	
	<tr>
   <td width="100%" colspan="6"><h3>Guardian Information</h3></td>
	</tr>
	
	<tr>
    <td width="12%" style="text-align:right">Name:</td>
	<td width="23%"><?php echo $_POST['guardian_name']; ?>:</td>
    <td width="12%" style="text-align:right">Relation:</td>
	<td width="23%"><?php echo $_POST['guardian_relation']; ?></td>
    <td width="30%" rowspan="4" colspan="2"><center><img src="images2/<?php echo $img_other ?> " width="120px" height="120px"></center></td>
  </tr>
  
   <tr>
    <td width="12%" style="text-align:right">Mobile No.:</td>
	<td width="23%"><?php echo $_POST['guardian_mobno']; ?></td>
    <td width="12%" style="text-align:right">Address:</td>
	<td width="23%"><?php echo $_POST['guardian_address']; ?></td>
    
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
I have applied for admission of my son/daughter in Gyanodaya  school khurai. I have read and understood the rules of school. I assure to abide by all the rules, school will have the right to struck off the name of my son/daughter from the rolls.</p>
<br>
<p>Date:<?php echo " ".date("d/m/y") ?></p>

<p>Place:<?php echo " ".$_POST['per_city']; ?></p>
<p style="text-align:right;margin-top:-100px;margin-right:20px"><img src="images2/<?php echo $img_sign ?> " width="180px" height="80px"><p>

<p style="text-align:right;margin-right:80px;">Signature</p><br>
				

</body>
</html>

<?php	
}
?>