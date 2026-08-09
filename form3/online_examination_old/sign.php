<?php include("../include/functions.php"); 
require_once("../include/dbconn.php");

include_once 'dbConnection.php';
ob_start();


				$dob=$_POST['dob'];
				$name= ucwords(strtolower($name));
				$gender = $_POST['gender'];


				$mob = $_POST['mob'];
				$password = "12345";

				$sql2="SELECT * FROM student_admission WHERE emg_number='$mob' AND dob='$dob'";
				$result2=mysqlexec($sql2);
				if($result2)
				{	
					$row=mysqli_fetch_assoc($result2);
					
					
					$name = $row['fname']." ".$row['mname']." ".$row['lname'] ;
					$college = $row['stu_class'];
					$gender=$row['gender'];
					
					if($row['email_id']==""){
						$email="temp@gmail.com";
					}else{
						$email=$row['email_id'];
					}
					
					

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
					$_SESSION["mob"] = $mob;
					$_SESSION["name"] = $name;

					header("location:account.php?q=1");
					}
					else
					{
						header("location:account.php?q=1");
					//header("location:index.php?q7=Email Already Registered!!!");
					}
					ob_end_flush();
					
				}else{
					header("location:index.php?q7=Student not Registered!!!");
				}
?>
