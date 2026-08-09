<?php include_once("include/functions.php"); ?>


	<?php
	
         $orderId = $_POST["orderId"];
		 $orderAmount = $_POST["orderAmount"];
		 $referenceId = $_POST["referenceId"];
		 $txStatus = $_POST["txStatus"];
		 $paymentMode = $_POST["paymentMode"];
		 $txMsg = $_POST["txMsg"];
		 $txTime = $_POST["txTime"];
		 $signature = $_POST["signature"];

		
		$sql5 = "INSERT 
									INTO
									   membership
									   (orderId, orderAmount, referenceId, paymentMode, txTime, txStatus) 
									VALUES
									   ('$orderId', '$orderAmount', '$referenceId', '$paymentMode', '$txTime', '$txStatus')
								";
					$result_new = mysqlexec($sql5);
					usleep( 250000 );
				if ($result_new) {
				    usleep( 250000 );
								$sql4="SELECT * FROM `student_admission` WHERE `admission_id` = '$orderId'";
									$result4 = mysqlexec($sql4);
									$row_new= mysqli_fetch_assoc($result4);
									$stu_name=$row_new['fname']." ".$row_new['mname']." ".$row_new['lname'];
									$father_name=$row_new['father_name'];
									$id=$row_new['id'];
								
									
										  ?>
										  <br><center>
										  <h1 style="color:red;">Your Admission Form Submitted Successfully!</h1>
										 <table border="2" style="margin-left:20px;padding:10px;" >
												<tbody>
													<tr>
														<th>S.No</th>
														<th>Label</th>
														<th>Value</th>
													</tr>
													<tr>
														<td>1</td>
														<td><label>ORDER_ID::*</label></td>
														<td><?php echo $orderId ?>
														</td>
													</tr>
													
													<tr>
														<td>2</td>
														<td><label>TNX AMOUNT ::*</label></td>
														<td><?php echo $orderAmount ?></td>
													</tr>
													<tr>
														<td>3</td>
														<td><label>TNX ID ::*</label></td>
														<td><?php echo $referenceId ?></td>
													</tr>
													<tr>
														<td>4</td>
														<td><label>TNX STATUS ::*</label></td>
														<td><?php echo $txStatus ?></td>
													</tr>
													<tr>
														<td>5</td>
														<td><label>PAYMENT MODE ::*</label></td>
														<td><?php echo $paymentMode ?></td>
													</tr>
													<tr>
														<td>6</td>
														<td><label>RESPONSE MESSAGE ::*</label></td>
														<td><?php echo $txMsg ?></td>
													</tr>
													<tr>
														<td>7</td>
														<td><label>TNX DATE ::*</label></td>
														<td><?php echo $txTime ?></td>
													</tr>
													
													
												</tbody>
											</table><br><br>
											<a href="admission_function2.php?id=<?php echo $id ?>"><img src="images/button.jpg" width="200px" height="50px"></a>
										 
										 <?php
								} else {
								  echo "Error: Try After Sometime! ";
								}
	
		
	




 
 ?>





</body>
</html>	