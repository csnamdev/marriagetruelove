<?php
include_once 'dbConnection.php';
include("../include/functions.php"); 
require_once("../include/dbconn.php");

ob_start();

				
				$name = $_POST['name'];
				$name= ucwords(strtolower($name));
				$gender = $_POST['gender'];
				$email = $_POST['email'];
				$college = $_POST['college'];
				$mob = $_POST['mob'];
				$password = $_POST['password'];

				$sql2="SELECT * FROM student_admission WHERE emg_number='$mob' AND stu_class='$college' AND gender='$gender'";
				$result2=mysqlexec($sql2);
				if($result2)
				{	
					
					$row=mysqli_num_rows($result2);
					if($row>0){
						$name = stripslashes($name);
						$name = addslashes($name);
						$name = ucwords(strtolower($name));
						$gender = stripslashes($gender);
						$gender = addslashes($gender);
						$email = stripslashes($email);
						$email = addslashes($email);
						$college = stripslashes($college);
						$college = addslashes($college);
						$mob = stripslashes($mob);
						$mob = addslashes($mob);

						$password = stripslashes($password);
						$password = addslashes($password);
						$password = md5($password);

						$q3=mysqli_query($con,"INSERT INTO user VALUES  ('$name' , '$gender' , '$college','$email' ,'$mob', '$password')");
						if($q3)
						{
						session_start();
						$_SESSION["email"] = $email;
						$_SESSION["name"] = $name;

						header("location:account.php?q=1");
						}
						else
						{
						header("location:index.php?q7=Student Already Registered! Kindly Login!!");
						}
						ob_end_flush();
					}
					else{
						?>
						<script>alert('Your Online Application Form Not Found! Kindly Fill Online Application Form!')</script> 
						<?php
						//header("location:index.php");
						header("location:index.php?q7=Your Online Application Form Not Found! Kindly Fill Online Application Form!");
					}
					
				}else
				{
					echo "Failure";
				}
			
			
			
				


?>