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


function register_next(){
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
            $uname=$_POST['fname'];
			$email=$_POST['email'];
			$pass=$_POST['pass'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$gender=$_POST['sex'];
			
            $year_value=40;
			
			$dob=$_POST['day']."-".$_POST['month']."-".$_POST['year'];
			$year_entry=2020-(int)$year_value;
			
			$maritalstatus="Never Married";
			$height="5ft.4in-162cm";
			$physicalstatus="No Problem";
			$religion="Hindu";
			$mothertounge="Hindi";
			$country = "India";
			
			$state=$_POST['state'];
			$district=$_POST['city'];
			
			$mobno=$_POST['mobno'];
			require_once("includes/dbconn.php");
			
           // $sql2="SELECT * FROM users WHERE email='$email'";
			//$result2=mysqlexec($sql2);
			//$row=mysqli_fetch_assoc($result2);


            // fetch according to mobile no
			$sql3="SELECT * FROM users WHERE mobno='$mobno'";
			$result3=mysqlexec($sql3);
			$row3=mysqli_fetch_assoc($result3);


			$age = (date('Y') - date('Y',strtotime($dob)));			
			//$id2=$row['email'];
            $id3=$row3['mobno'];
            $mob_len=strlen($mobno);
			
				if(($result3 && $id3==$mobno) || $mob_len!=10)
				{
					
					
					if($mob_len!=10){
						?>
								
					<script>
					var m;
					
					m="<?php echo strlen($mobno) ?>";
					alert("Error in Mobile number Length= " + m + " Enter right 10 digit mobile number");
					window.location="register_entry2.php";
					</script>
					<?php
						
					}else{
						
					?>
								
					<script>
					var y;
					
					y="<?php echo $id2 ?>";
					alert("Mobile number" + y + "  is Already Register! Register with Other Email-Id");
					window.location="register_entry2.php";
					</script>
					<?php
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
					$id="MTL".$row['id'];
					$id2=$row['id'];
					//$age="";
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
								   (cust_id, email, age, height, sex, religion,  district, state, country, maritalstatus,  firstname, lastname,  physical_status,  mothertounge, dateofbirth,  profilecreationdate, mobno) 
								VALUES
								   ('$id2','$email','$age','$height', '$gender', '$religion', '$district', '$state', '$country', '$maritalstatus', '$fname', '$lname', '$physicalstatus',  '$mothertounge', '$dob', CURDATE(), '$mobno')
							";
					if (mysqli_query($conn,$sql5))
					{
						?>
								
					  <?php
							  //creating a slot for partner prefernce table for prefs details with cust id
							  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id2')";
							  mysqli_query($conn,$sql2);
							  //$sql2="UPDATE TABLE users SET profilestat=1 WHERE id=$id2";
					} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
				
					
					
					?>
								
					<script>
					var x;
					x="<?php echo $id ?>";
					y="<?php echo $pass ?>";
					alert("Registration Successfully:  Profile Id=" + x + "  Password=" + y + "Kindly Login By using Your Profile ID & Password");
					window.location="login.php";
					</script>
					<?php
					
				}
						
						
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
			$dob=$_POST['day']."-".$_POST['month']."-".$_POST['year'];
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
			$sql2="SELECT * FROM users WHERE email='$email'";
			$result2=mysqlexec($sql2);
			$row=mysqli_fetch_assoc($result2);
			$age = (date('Y') - date('Y',strtotime($dob)));			
			$id2=$row['email'];
			$mob_len=strlen($mobno);
				if(($result2 && $id2==$email) || $mob_len!=10)
				{
					
					
				if($mob_len!=10){
						?>
								
					<script>
					var m;
					
					m="<?php echo strlen($mobno) ?>";
					alert("Error in Mobile number Length= " + m + " Enter right 10 digit mobile number");
					window.location="register.php";
					</script>
					<?php
						
					}else{
						
					?>
								
					<script>
					var y;
					
					y="<?php echo $id2 ?>";
					alert("Email-Id " + y + "  is Already Register! Register with Other Email-Id");
					window.location="register_entry.php";
					</script>
					<?php
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
					$id="MTL".$row['id'];
					$id2=$row['id'];
					//$age="";
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
								   (cust_id, email, age, height, sex, religion,  district, state, country, maritalstatus,  firstname, lastname,  physical_status,  mothertounge, dateofbirth,  profilecreationdate, mobno) 
								VALUES
								   ('$id2','$email','$age','$height', '$gender', '$religion', '$district', '$state', '$country', '$maritalstatus', '$fname', '$lname', '$physicalstatus',  '$mothertounge', '$dob', CURDATE(), '$mobno')
							";
					if (mysqli_query($conn,$sql5))
					{
						?>
								
					  <?php
							  //creating a slot for partner prefernce table for prefs details with cust id
							  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id2')";
							  mysqli_query($conn,$sql2);
							  //$sql2="UPDATE TABLE users SET profilestat=1 WHERE id=$id2";
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
}
function isloggedin(){
	if(!isset($_SESSION['id'])){
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
	
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
	$dob=$year ."-" . $month . "-" .$day ;
	//$dob=$_POST['dob'];
	
	$address=$_POST['address'];
	$country = $_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	
	$maritalstatus=$_POST['maritalstatus'];
	  
	
	
	$profileby=$_POST['profileby'];
	
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
	
	
	$mobno=$_POST['mobno'];
	

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
		   height = '$height',
		   sex = '$sex',
		   address = '$address',
		   district = '$district',
		   state = '$state',
		   country = '$country',
		   maritalstatus = '$maritalstatus',
		   profilecreatedby = '$profileby',
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
		   mobno = '$mobno'
		WHERE cust_id=$id; "
		   ;
   $result=mysqlexec($sql);
   if ($result) {
   	echo "<script>alert(\"Successfully Updated Profile\")</script>";
   	echo "<script> window.location=\"userhome.php?id=$id\"</script>";
   }
}

	 
}


function processprofile_form2($id)
{
   
	
		//$day=$_POST['day'];
		//$month=$_POST['month'];
		//$year=$_POST['year'];
	//$dob=$year ."-" . $month . "-" .$day ;
	
	$religion=$_POST['religion'];
	$caste = $_POST['caste'];
	$education=$_POST['education'];
	$edudescr=$_POST['edudescr'];
	$occupation=$_POST['occupation'];
	$occupationdescr=$_POST['occupationdescr'];
	$fatheroccupation=$_POST['fatheroccupation'];
	$motheroccupation=$_POST['motheroccupation'];
	$income=$_POST['income'];
	$bros=$_POST['bros'];
	$sis=$_POST['sis'];
	$aboutme=$_POST['aboutme'];
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
		   religion = '$religion',
		   caste = '$caste',
		   education  = '$education',
		   education_sub = '$edudescr',
		   occupation = '$occupation', 
		   occupation_descr = '$occupationdescr', 
		   annual_income = '$income', 
		   fathers_occupation = '$fatheroccupation',
		   mothers_occupation = '$motheroccupation',
		   no_bro = '$bros', 
		   no_sis = '$sis',
           aboutme = '$aboutme',
           family_type = '$family_type',
           family_status = '$family_status'
		WHERE cust_id=$id; "
		   ;
   $result=mysqlexec($sql);
   if ($result) {
   	echo "<script>alert(\"Successfully Updated Profile\")</script>";
   	echo "<script> window.location=\"userhome.php?id=$id\"</script>";
   }
}

	 
}


//function for REMOVE photo
function removephoto($id){
	$sql="UPDATE photos SET pic1 = '' WHERE cust_id=$id";
		mysqlexec($sql);
		
		$sql_photo="UPDATE customer SET photo_status = 0 WHERE cust_id=$id";
		mysqlexec($sql_photo);
		
}
//function for upload photo

//function for upload photo

function uploadphoto($id){
	$target = "profile/". $id ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['photo1_img']['name']);
//$target2 = $target . basename( $_FILES['photo2_img']['name']);
//$target3 = $target . basename( $_FILES['photo3_img']['name']);
//$target4 = $target . basename( $_FILES['photo4_img']['name']);


// This gets all the other information from the form
$pic1=($_FILES['photo1_img']['name']);
//$pic2=($_FILES['photo2_img']['name']);
//$pic3=($_FILES['photo3_img']['name']);
//$pic4=($_FILES['photo4_img']['name']);

$sql="SELECT id FROM photos WHERE cust_id = '$id'";
$result = mysqlexec($sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		//$sql="INSERT INTO photos (cust_id, pic1, pic2, pic3, pic4) VALUES ('$id', '$pic1' ,'$pic2', '$pic3','$pic4')";
		$sql="INSERT INTO photos (cust_id,pic1) VALUES ('$id','$pic1')";
		
		// Writes the information to the database
		mysqlexec($sql);
        move_uploaded_file($_FILES['photo1_img']['tmp_name'], $target1);
        $sql_photo="UPDATE customer SET photo_status = 1 WHERE cust_id=$id";
		mysqlexec($sql_photo);
		
} else {
    // There is a photo for customer so up
	if($pic1!=""){
		
		$sql="UPDATE photos SET pic1 = '$pic1' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo1_img']['tmp_name'], $target1);
		 $sql_photo="UPDATE customer SET photo_status = 1 WHERE cust_id=$id";
		mysqlexec($sql_photo);
	}
	/*if($pic2!=""){
		
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
	}*/
	
     
}



}//end uploadphoto function


//function for upload photo2
function removephoto2($id){
	$sql="UPDATE photos SET pic2 = '' WHERE cust_id=$id";
		mysqlexec($sql);
}
function uploadphoto2($id){
	$target = "profile/". $id ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['photo2_img']['name']);


// This gets all the other information from the form
$pic2=($_FILES['photo2_img']['name']);


$sql="SELECT id FROM photos WHERE cust_id = '$id'";
$result = mysqlexec($sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		
		$sql="INSERT INTO photos (cust_id) VALUES ('$id')";
		
		// Writes the information to the database
		mysqlexec($sql);
        move_uploaded_file($_FILES['photo2_img']['tmp_name'], $target1);
		
} else {
    // There is a photo for customer so up
	if($pic2!=""){
		
		$sql="UPDATE photos SET pic2 = '$pic2' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo2_img']['tmp_name'], $target1);
	}
	    
}



}//end uploadphoto2 function


//function for upload photo3
function removephoto3($id){
	$sql="UPDATE photos SET pic3 = '' WHERE cust_id=$id";
		mysqlexec($sql);
}
function uploadphoto3($id){
	$target = "profile/". $id ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['photo3_img']['name']);


// This gets all the other information from the form
$pic3=($_FILES['photo3_img']['name']);


$sql="SELECT id FROM photos WHERE cust_id = '$id'";
$result = mysqlexec($sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		
		$sql="INSERT INTO photos (cust_id) VALUES ('$id')";
		
		// Writes the information to the database
		mysqlexec($sql);
        move_uploaded_file($_FILES['photo3_img']['tmp_name'], $target1);
		
} else {
    // There is a photo for customer so up
	if($pic3!=""){
		
		$sql="UPDATE photos SET pic3 = '$pic3' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo3_img']['tmp_name'], $target1);
	}
	    
}



}//end uploadphoto3 function


//function for upload photo4
function removephoto4($id){
	$sql="UPDATE photos SET pic4 = '' WHERE cust_id=$id";
		mysqlexec($sql);
}
function uploadphoto4($id){
	$target = "profile/". $id ."/";
if (!file_exists($target)) {
    mkdir($target, 0777, true);
}
//specifying target for each file
$target1 = $target . basename( $_FILES['photo4_img']['name']);


// This gets all the other information from the form
$pic4=($_FILES['photo4_img']['name']);


$sql="SELECT id FROM photos WHERE cust_id = '$id'";
$result = mysqlexec($sql);

//code part to check weather a photo already exists
if(mysqli_num_rows($result) == 0) {
     // no photo for curret user, do stuff...
		
		$sql="INSERT INTO photos (cust_id) VALUES ('$id')";
		
		// Writes the information to the database
		mysqlexec($sql);
        move_uploaded_file($_FILES['photo4_img']['tmp_name'], $target1);
		
} else {
    // There is a photo for customer so up
	if($pic4!=""){
		
		$sql="UPDATE photos SET pic4 = '$pic4' WHERE cust_id=$id";
		mysqlexec($sql);
		move_uploaded_file($_FILES['photo4_img']['tmp_name'], $target1);
	}
	    
}



}//end uploadphoto4 function
?>
<?php
function new_insert(){
	//Insert the data
					$sql5 = "INSERT 
								INTO
								   customer
								   (cust_id, email, age, sex, religion, caste, subcaste, district, state, country, maritalstatus, profilecreatedby, education, education_sub, firstname, lastname, body_type, physical_status, drink, mothertounge, colour, weight, height, blood_group, diet, smoke,   dateofbirth, occupation, occupation_descr, annual_income, fathers_occupation, mothers_occupation, no_bro, no_sis, aboutme, profilecreationdate, mobno) 
								VALUES
								   ('$id2','$email', '$age', '$gender', '$religion', '$caste', '$subcaste', '$district', '$state', '$country', '$maritalstatus', '$profileby', '$education', '$edudescr', '$fname', '$lname', '$bodytype', '$physicalstatus', '$drink', '$mothertounge', '$colour', '$weight', '$height', '$bloodgroup', '$diet', '$smoke', '$dob', '$occupation', '$occupationdescr', '$income', '$fatheroccupation', '$motheroccupation', '$bros', '$sis', '$aboutme', CURDATE(), '$mobno')
							";
					if (mysqli_query($conn,$sql5))
					{
						?>
								<script>
								alert("Updation Successfully");
					
								</script>
					  <?php
							  //creating a slot for partner prefernce table for prefs details with cust id
							  $sql2="INSERT INTO partnerprefs (id, custId) VALUES('', '$id2')";
							  mysqli_query($conn,$sql2);
							  $sql2="UPDATE TABLE users SET profilestat=1 WHERE id=$id2";
					} else {
							echo "Error: " . $sql . "<br>" . $conn->error;
							}
				
					
					
} ?>