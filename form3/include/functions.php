<?php
function mysqlexec($sql){
	$host="localhost"; // Host name
	$username="trueloveuser"; // Mysql username
	$password="Truemarriage@2021"; // Mysql password
	$db_name="marriagetruelove"; // Database name

// Connect to server and select databse.
	$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect");

	mysqli_select_db($conn,"$db_name")or die("cannot select DB");

	if($result = mysqli_query($conn, $sql)){
		return $result;
	}
	else{
		echo mysqli_error($conn);
	}


}
function searchid(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$profid=$_POST['profid'];
		$sql="SELECT * FROM customer WHERE id=$profid";
		$result = mysqlexec($sql);
    	return $result;
	}
}

function register_copy2($id){
	

   $host="localhost"; // Host name
	$username="trueloveuser"; // Mysql username
	$password="Truemarriage@2021"; // Mysql password
	$db_name="marriagetruelove"; // Database name
	$delete_id=$id;
// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");
				$sql2="SELECT * FROM copy_users where id='$id'";
				
				$result2=mysqlexec($sql2);
                $rowcount=mysqli_num_rows($result2);


$row = mysqli_fetch_array($result2);
			$fname=$row['name'];
			$mobno=$row['mobno'];
	        $year_value=40;
			$uname=$fname;
			$email=$fname.$mobno."@gmail.com";
			$pass="12345";
			$lname="";
			$gender="Male";
			$year_entry=2020-(int)$year_value;
			$dob="01-01-".$year_entry;
			$maritalstatus="Never Married";
			$height="5ft.4in-162cm";
			$physicalstatus="No Problem";
			$religion="Hindu";
			$mothertounge="Hindi";
			$country = "India";
			$state="Uttar Pradesh";
			$district="Uttar Pradesh";
			
			
			
										$caste="";
										$subcaste="";
										$profileby="";
										$education="";
										$edudescr="";
										$bodytype="";
										$drink="";
										$colour=""; 
										$weight="";
										$bloodgroup="";
										$diet="";
										$smoke="";
										$occupation="";
										$occupationdescr="";
										$income="";
										$fatheroccupation="";
										$motheroccupation="";
										$bros="";
										$sis="";
										$aboutme="";
				
			$sql3="SELECT * FROM users WHERE mobno='$mobno'";
			$result3=mysqlexec($sql3);
			$row3=mysqli_fetch_assoc($result3);


			$age = (date('Y') - date('Y',strtotime($dob)));			
			
            $id3=$row3['mobno'];
            $mob_len=strlen($mobno);
			
				if(($result3 && $id3==$mobno) || $mob_len!=10)
				{
					
					
				if($mob_len!=10){
								?>
								
								<h4 style="color:red"> <?php echo "Id ".$id." Not Deleted! Mob Length=".$mob_len; ?> </h4>
												
								<?php
									echo nl2br("\n");
								
					}else{
						
								?>
								
								<h4 style="color:red"> <?php echo "Id ".$id." Not Deleted! Mobile No. ".$id3." Already Registered!"; ?> </h4>
												
								<?php
									echo nl2br("\n");
								
					}
				}else{
						
						$sql = "INSERT 
						INTO
						   users
						   ( profilestat, username, password, email, dateofbirth, gender, userlevel, mobno) 
						VALUES
						   (0, '$uname', '$pass', '$email', '$dob', '$gender', 0 , '$mobno')";
				
						if (mysqli_query($conn,$sql)) 
						{
							
									$sql23="SELECT * FROM users WHERE email='$email'";
									$result23=mysqlexec($sql23);
									if($result23)
									{
										$row=mysqli_fetch_assoc($result23);
										$id="ES".$row['id'];
										$id2=$row['id'];
										
										//Insert the data
										$sql5 = "INSERT 
													INTO
													   customer
													   (cust_id, email, age, height, sex, religion,  district, state, country, maritalstatus,  firstname, lastname,  physical_status,  mothertounge, dateofbirth,  profilecreationdate, mobno) 
													VALUES
													   ('$id2','$email','$age','$height', '$gender', '$religion', '$district', '$state', '$country', '$maritalstatus', '$fname', '$lname', '$physicalstatus',  '$mothertounge', '$dob', CURDATE(), '$mobno')
												";
										if (mysqli_query($conn,$sql5))
										{
											
											$sql29="INSERT INTO partnerprefs (id, custId) VALUES('', '$id2')";
												mysqli_query($conn,$sql29);  
												
												$delete_emp_user="DELETE FROM copy_users where id='$delete_id'";
												mysqli_query($conn,$delete_emp_user);
												
												?> <h4 style="color:green"> <?php echo "Deleted Id:".$delete_id."\t"."Copied New Profile Id is=".$id; ?> </h4>
												
												<?php
												echo nl2br("\n");
												
												  
										} else {
												echo "Error: " . $sql . "<br>" . $conn->error;
												}
																		
									}
									
						}
				
				}
		
}


function search(){
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $agemin=$_POST['agemin'];
    $agemax=$_POST['agemax'];
    $maritalstatus=$_POST['maritalstatus'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $religion=$_POST['religion'];
    $mothertounge=$_POST['mothertounge'];
    $sex = $_POST['sex'];

    $sql="SELECT * FROM customer WHERE 
    sex='$sex' 
    AND age>='$agemin'
    AND age<='$agemax'
    AND maritalstatus = '$maritalstatus'
    AND country = '$country'
    AND state = '$state'
    AND religion = '$religion'
    AND mothertounge = '$mothertounge'
    ";

    $result = mysqlexec($sql);
    return $result;

  }
}
function writepartnerprefs($id){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$agemin=$_POST['agemin'];
		$agemax=$_POST['agemax'];
		$maritalstatus=$_POST['maritalstatus'];
		$complexion=$_POST['colour'];
		$height=$_POST['height'];
		$diet=$_POST['diet'];
		$religion=$_POST['religion'];
		$caste=$_POST['caste'];
		$mothertounge=$_POST['mothertounge'];
		$education=$_POST['education'];
		$occupation=$_POST['occupation'];
		$country=$_POST['country'];
		$descr=$_POST['descr'];

		$sql = "UPDATE
				   partnerprefs 
				SET
				   agemin = '$agemin',
				   agemax='$agemax',
				   maritalstatus = '$maritalstatus',
				   complexion = '$complexion',
				   height = '$height',
				   diet = '$diet',
				   religion='$religion',
				   caste = '$caste',
				   mothertounge = '$mothertounge',
				   education='$education',
				   descr = '$descr',
				   occupation = '$occupation',
				   country = '$country' 
				WHERE
				   custId = '$id'";

		$result = mysqlexec($sql);
		if ($result) {
			echo "<script>alert(\"Successfully updated Partner Preference\")</script>";
			echo "<script> window.location=\"userhome.php?id=$id\"</script>";

		}
		else{
			echo "Error";
		}

	}
}


function register(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
			$uname=$_POST['fname'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$gender=$_POST['sex'];
			$dob=$_POST['dob'];
			$maritalstatus=$_POST['maritalstatus'];
			$height=$_POST['height'];
			$physicalstatus=$_POST['physicalstatus'];
			$religion=$_POST['religion'];
			$mothertounge=$_POST['mothertounge'];
			$country = $_POST['country'];
			$state=$_POST['state'];
			$district=$_POST['district'];
			$mobno=$_POST['mobno'];
			require_once("includes/dbconn.php");

				$sql = "INSERT 
						INTO
						   users
						   ( profilestat, username, password, email, dateofbirth, gender, userlevel, mobno) 
						VALUES
						   (0, '$uname', '$pass', '$email', '$dob', '$gender', 0 , '$mobno')";
				
				if (mysqli_query($conn,$sql)) 
				{
					
					
					
					
				}
				else {
				  echo "Error: " . $sql . "<br>" . $conn->error;
				}
				require_once("includes/dbconn.php");
				$sql2="SELECT * FROM users WHERE email='$email'";
				$result2=mysqlexec($sql2);
				if($result2)
				{
					$row=mysqli_fetch_assoc($result2);
					$id="ES".$row['id'];
					$id2=$row['id'];
					$age="";
					$caste="";
					$subcaste="";
					$profileby="";
					$education="";
					$edudescr="";
					$bodytype="";
					$drink="";
					$colour=""; 
					$weight="";
					$bloodgroup="";
					$diet="";
					$smoke="";
					$occupation="";
					$occupationdescr="";
					$income="";
					$fatheroccupation="";
					$motheroccupation="";
					$bros="";
					$sis="";
					$aboutme="";
					?>
					
					<?php

	//Insert the data
					$sql5 = "INSERT 
								INTO
								   customer
								   (cust_id, email,  sex, religion,  district, state, country, maritalstatus,  firstname, lastname,  physical_status,  mothertounge, dateofbirth,  profilecreationdate, mobno) 
								VALUES
								   ('$id2','$email', '$gender', '$religion', '$district', '$state', '$country', '$maritalstatus', '$fname', '$lname', '$physicalstatus',  '$mothertounge', '$dob', CURDATE(), '$mobno')
							";
					if (mysqli_query($conn,$sql5))
					{
						?>
								
					  <?php
							  //creating a slot for partner prefernce table for prefs details with cust id
							  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id2')";
							  mysqli_query($conn,$sql2);
							  $sql2="UPDATE TABLE users SET profilestat=1 WHERE id=$id2";
					} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
				
					
					
 ?>
					
					
					
					
					
					<script>
					var x;
					x="<?php echo $id ?>";
					y="<?php echo $pass ?>";
					alert("Registration Successfully:  Profile Id=" + x + "  Password=" + y);
					window.location="login.php";
					</script>
					<?php
					
				}
	}	
}

function isloggedin(){
	if(isset($_SESSION['id'])){
	 	return false;
	}
	else{
		return true;
	}

}


function processprofile_form($id)
{
   
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$sex=$_POST['sex'];
	$email=$_POST['email'];
	
		//$day=$_POST['day'];
		//$month=$_POST['month'];
		//$year=$_POST['year'];
	//$dob=$year ."-" . $month . "-" .$day ;
	$dob=$_POST['dob'];
	$religion=$_POST['religion'];
	$caste = $_POST['caste'];
	$subcaste=$_POST['subcaste'];
	
	$country = $_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$age=$_POST['age'];
	$maritalstatus=$_POST['maritalstatus'];
	$profileby=$_POST['profileby'];
	$education=$_POST['education'];
	$edudescr=$_POST['edudescr'];
	$bodytype=$_POST['bodytype'];
	$physicalstatus=$_POST['physicalstatus'];
	$drink=$_POST['drink'];
	$smoke=$_POST['smoke'];
	$mothertounge=$_POST['mothertounge'];
	$bloodgroup=$_POST['bloodgroup'];
	
	$weight=$_POST['weight'];
	$height=$_POST['height'];
	$colour=$_POST['colour'];
	$diet=$_POST['diet'];
	$occupation=$_POST['occupation'];
	$occupationdescr=$_POST['occupationdescr'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$motheroccupation=$_POST['motheroccupation'];
	$income=$_POST['income'];
	$bros=$_POST['bros'];
	$sis=$_POST['sis'];
	$aboutme=$_POST['aboutme'];
	$mobno=$_POST['mobno'];
	$family_status=$_POST['family_status'];
	$family_type=$_POST['family_type'];

	require_once("includes/dbconn.php");
	$sql="SELECT cust_id FROM customer WHERE cust_id=$id";
	$result=mysqlexec($sql);

if(mysqli_num_rows($result)>=1){
	//there is already a profile in this table for loggedin customer
	//update the data
	$sql="UPDATE
   			customer 
		SET
		   email = '$email',
		   age = '$age',
		   sex = '$sex',
		   religion = '$religion',
		   caste = '$caste',
		   subcaste = '$subcaste',
		   district = '$district',
		   state = '$state',
		   country = '$country',
		   maritalstatus = '$maritalstatus',
		   profilecreatedby = '$profileby',
		   education  = '$education',
		   education_sub = '$edudescr',
		   firstname = '$fname',
		   lastname = '$lname',
		   body_type = '$bodytype',
		   physical_status = '$physicalstatus',
		   drink =  '$drink',
		   mothertounge = '$mothertounge',
		   colour = '$colour',
		   weight = '$weight',
		   blood_group = '$bloodgroup',
		   diet = '$diet', 
		   smoke = '$smoke',
		   dateofbirth = '$dob', 
		   occupation = '$occupation', 
		   occupation_descr = '$occupationdescr', 
		   annual_income = '$income', 
		   fathers_occupation = '$fatheroccupation',
		   mothers_occupation = '$motheroccupation',
		   no_bro = '$bros', 
		   no_sis = '$sis',
           aboutme = '$aboutme',
           mobno = '$mobno',
		   family_type = '$family_type',
           family_status = '$family_status'
		WHERE cust_id=$id; "
		   ;
   $result=mysqlexec($sql);
   if ($result) {
   	echo "<script>alert(\"Successfully Updated Profile\")</script>";
   	echo "<script> window.location=\"userhome.php?id=$id\"</script>";
   }
}else{
	//Insert the data
	$sql = "INSERT 
				INTO
				   customer
				   (cust_id, email, age, sex, religion, caste, subcaste, district, state, country, maritalstatus, profilecreatedby, education, education_sub, firstname, lastname, body_type, physical_status, drink, mothertounge, colour, weight, height, blood_group, diet, smoke,   dateofbirth, occupation, occupation_descr, annual_income, fathers_occupation, mothers_occupation, no_bro, no_sis, aboutme, profilecreationdate, mobno) 
				VALUES
				   ('$id','$email', '$age', '$sex', '$religion', '$caste', '$subcaste', '$district', '$state', '$country', '$maritalstatus', '$profileby', '$education', '$edudescr', '$fname', '$lname', '$bodytype', '$physicalstatus', '$drink', '$mothertounge', '$colour', '$weight', '$height', '$bloodgroup', '$diet', '$smoke', '$dob', '$occupation', '$occupationdescr', '$income', '$fatheroccupation', '$motheroccupation', '$bros', '$sis', '$aboutme', CURDATE(), '$mobno')
			";
	if (mysqli_query($conn,$sql)) {
		?>
		<script>
	alert("Updation Successfully");
	window.location="userhome.php?id={$id}";
	</script>
	  <?php
	  //creating a slot for partner prefernce table for prefs details with cust id
	  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id')";
	  mysqli_query($conn,$sql2);
	  $sql2="UPDATE TABLE users SET profilestat=1 WHERE id=$id";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

	 
}

//function for upload photo

function uploadphoto($id){
	$target = "profile/". $id ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['photo1_img']['name']);
$target2 = $target . basename( $_FILES['photo2_img']['name']);
$target3 = $target . basename( $_FILES['photo3_img']['name']);
$target4 = $target . basename( $_FILES['photo4_img']['name']);


// This gets all the other information from the form
$pic1=($_FILES['photo1_img']['name']);
$pic2=($_FILES['photo2_img']['name']);
$pic3=($_FILES['photo3_img']['name']);
$pic4=($_FILES['photo4_img']['name']);

$sql="SELECT id FROM photos WHERE cust_id = '$id'";
$result = mysqlexec($sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		$sql="INSERT INTO photos (cust_id, pic1, pic2, pic3, pic4) VALUES ('$id', '$pic1' ,'$pic2', '$pic3','$pic4')";
		// Writes the information to the database
		mysqlexec($sql);

		
} else {
    // There is a photo for customer so up
	if($pic1!=""){
		
		$sql="UPDATE photos SET pic1 = '$pic1' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo1_img']['tmp_name'], $target1);
	}
	if($pic2!=""){
		
		$sql="UPDATE photos SET pic2 = '$pic2' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo2_img']['tmp_name'], $target2);
	}
	if($pic3!=""){
		
		$sql="UPDATE photos SET pic3 = '$pic3' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo3_img']['tmp_name'], $target3);
	}
	if($pic4!=""){
		
		$sql="UPDATE photos SET pic4 = '$pic4' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo4_img']['tmp_name'], $target4);
	}
	
     
}



}//end uploadphoto function

?>
<?php
function new_insert(){
					$id=uniqid();
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
					
					$aadhar_img=$_FILES['aadhar_img']['name'];
					$tmp_aadhar_img=$_FILES['aadhar_img']['tmp_name'];
					move_uploaded_file($tmp_aadhar_img,"images2/$aadhar_img");
					
					
					$sssmid_img=$_FILES['sssmid_img']['name'];
					$tmp_sssmid_img=$_FILES['sssmid_img']['tmp_name'];
					move_uploaded_file($tmp_sssmid_img,"images2/$sssmid_img");
					
					$passbook_img=$_FILES['passbook_img']['name'];
					$tmp_passbook_img=$_FILES['passbook_img']['tmp_name'];
					move_uploaded_file($tmp_passbook_img,"images2/$passbook_img");
					
					$fname=$_POST['fname'];
					$mname=$_POST['mname'];
					$lname=$_POST['lname']; 
					$stu_class=$_POST['stu_class'];
					$dob=$_POST['dob'];
					$gender=$_POST['gender'];
					$religion=$_POST['religion'];
					$caste=$_POST['caste'];
					$mother_tongue=$_POST['mother_tongue'];
					$blood_group=$_POST['blood_group'];
					$boarding_cat=$_POST['boarding_cat'];
					$school_bus=$_POST['school_bus'];
					$emg_number=$_POST['emg_number'];
					$email_id=$_POST['email_id'];
					$stu2_photo=$img_name;
					$aadhar_no=$_POST['aadhar_no'];
					$sssmid=$_POST['sssmid'];
					$family_sssmid=$_POST['family_sssmid'];
					$account_no=$_POST['account_no'];
					$account_holder_name=$_POST['account_holder_name'];					
					$bank_name=$_POST['bank_name'];
					$bank_branch=$_POST['bank_branch'];
					$bank_ifsc=$_POST['bank_ifsc'];
					
					
					
					$pre_address=$_POST['pre_address'];
					$pre_tehsil=$_POST['pre_tehsil'];
					$pre_city=$_POST['pre_city'];
					$pre_distict=$_POST['pre_distict'];
					$pre_state=$_POST['pre_state'];
					$pre_pincode=$_POST['pre_pincode'];
					$per_address=$_POST['per_address'];
					$per_tehsil=$_POST['per_tehsil'];
					$per_city=$_POST['per_city'];
					$per_distict=$_POST['per_distict'];
					$per_state=$_POST['per_state'];
					$per_pincode=$_POST['per_pincode'];
					$father_name=$_POST['father_name'];
					$father_occupation=$_POST['father_occupation'];
					$father_org=$_POST['father_org'];
					$father_qualification=$_POST['father_qualification'];
					$father_designation=$_POST['father_designation'];
					$father_income=$_POST['father_income'];
					$father_photo=$img_father;
					$father_mobno=$_POST['father_mobno'];
					$father_whatsapp=$_POST['father_whatsapp'];
					$mother_name=$_POST['mother_name'];
					$mother_occupation=$_POST['mother_occupation'];
					$mother_org=$_POST['mother_org'];
					$mother_qualification=$_POST['mother_qualification'];
					$mother_designation=$_POST['mother_designation'];
					$mother_income=$_POST['mother_income'];
					$mother_photo=$img_mother;
					$mother_mobno=$_POST['mother_mobno'];
					$mother_whatsapp=$_POST['mother_whatsapp'];
					$guardian_name=$_POST['guardian_name'];
					$guardian_mobno=$_POST['guardian_mobno'];
					$guardian_relation=$_POST['guardian_relation'];
					$guardian_address=$_POST['guardian_address'];
					$guardian_photo=$img_other;
					$parents_sign_img=$img_sign;
					$form_submit_date=date("d/m/y");		
					
	//Insert the data
					 $sql5 = "INSERT 
								INTO
								   student_admission
								   (admission_id, fname, mname, lname, stu_class, dob, gender, religion, caste, mother_tongue, blood_group, boarding_cat, school_bus, emg_number, email_id, stu2_photo, aadhar_no, sssmid, family_sssmid, account_no, account_holder_name, bank_name, bank_branch, bank_ifsc, aadhar_img, sssmid_img, passbook_img, pre_address, pre_tehsil, pre_city, pre_distict, pre_state, pre_pincode, per_address, per_tehsil, per_city, per_distict, per_state, per_pincode, father_name, father_occupation, father_org, father_qualification, father_designation, father_income, father_photo, father_mobno, father_whatsapp, mother_name, mother_occupation, mother_org, mother_qualification, mother_designation, mother_income, mother_photo, mother_mobno, mother_whatsapp, guardian_name, guardian_mobno, guardian_relation, guardian_address, guardian_photo, parents_sign_img, form_submit_date) 
								VALUES
								   ('$id','$fname','$mname', '$lname', '$stu_class', '$dob', '$gender', '$religion', '$caste', '$mother_tongue', '$blood_group', '$boarding_cat', '$school_bus', '$emg_number', '$email_id', '$stu2_photo', '$aadhar_no', '$sssmid', '$family_sssmid', '$account_no', '$account_holder_name', '$bank_name', '$bank_branch`', '$bank_ifsc', '$aadhar_img', '$sssmid_img', '$passbook_img', '$pre_address', '$pre_tehsil', '$pre_city', '$pre_distict', '$pre_state', '$pre_pincode', '$per_address', '$per_tehsil', '$per_city', '$per_distict', '$per_state', '$per_pincode', '$father_name','$father_occupation', '$father_org', '$father_qualification', '$father_designation', '$father_income', '$father_photo', '$father_mobno', '$father_whatsapp', '$mother_name','$mother_occupation', '$mother_org', '$mother_qualification', '$mother_designation', '$mother_income', '$mother_photo', '$mother_mobno', '$mother_whatsapp', '$guardian_name', '$guardian_mobno', '$guardian_relation', '$guardian_address`', '$guardian_photo', '$parents_sign_img', '$form_submit_date')
							"; 
							
					if (mysqlexec($sql5))
					{
						$appId="1539868e0fa5c6635fb99710189351";

						$orderId=$id;
						$orderAmount=200;
						$orderCurrency="INR";
						$orderNote="Online Admission Form Fee";
						
						$customerPhone=$emg_number;
						
						if($email_id==""){
							$customerEmail="temp@gmail.com";
						}else{
							$customerEmail=$email_id;
						}
						$customerName=$fname." ".$mname." ".$lname;

						$returnUrl="http://chandrashekhar.rf.gd/form/cashfree_output.php";
						$notifyUrl="http://chandrashekhar.rf.gd/form/cashfree_output.php";

						?>
								<body onload="document.frm1.submit()">
								<form id="redirectForm" method="post" name="frm1" action="request.php">
									<div class="form-group">
									  <label>App ID:</label><br>
									  <input class="form-control" name="appId" value="<?php echo $appId ?>" placeholder="<?php echo $appId ?>"/>
									</div>
									<div class="form-group">
									  <label>Order ID:</label><br>
									  <input class="form-control" name="orderId" value="<?php echo $orderId ?>" placeholder="<?php echo $orderId ?>"/>
									</div>
									<div class="form-group">
									  <label>Order Amount:</label><br>
									  <input class="form-control" name="orderAmount"value="<?php echo $orderAmount ?>" placeholder="<?php echo $orderAmount ?>"/>
									</div>
									<div class="form-group">
									  <label>Order Currency:</label><br>
									  <input class="form-control" name="orderCurrency" value="INR" placeholder="INR"/>
									</div>
									<div class="form-group">
									  <label>Order Note:</label><br>
									  <input class="form-control" name="orderNote"value="<?php echo $orderNote ?>" placeholder="<?php echo $orderNote ?>"/>
									</div>    
									<div class="form-group">
									  <label>Name:</label><br>
									  <input class="form-control" name="customerName"value="<?php echo $customerName ?>" placeholder="<?php echo $customerName ?>"/>
									</div>
									<div class="form-group">
									  <label>Email:</label><br>
									  <input class="form-control" name="customerEmail"value="<?php echo $customerEmail ?>" placeholder="<?php echo $customerEmail ?>"/>
									</div>
									<div class="form-group">
									  <label>Phone:</label><br>
									  <input class="form-control" name="customerPhone" value="<?php echo $customerPhone ?>" placeholder="<?php echo $customerPhone ?>"/>
									</div>
									<div class="form-group">
									  <label>Return URL:</label><br>
									  <input class="form-control" name="returnUrl" value="<?php echo $returnUrl ?>" placeholder="<?php echo $returnUrl ?>"/>
									</div>        
									<div class="form-group">
									  <label>Notify URL:</label><br>
									  <input class="form-control" name="notifyUrl" value="<?php echo $returnUrl ?>" placeholder="<?php echo $returnUrl ?>"/>
									</div>
								   
								  </form>
								
								</body>
					  <?php
							 
					} else {
							echo "Error: " . $sql5 . "<br>" ;
							}
				
					
					
} ?>