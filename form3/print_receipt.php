
<?php include_once("include/functions.php"); ?>


<?php  
									$id=$_GET['id'];
									$sql4="SELECT * FROM `student_admission` WHERE `id` = '$id'";
									$result4 = mysqlexec($sql4);
									$row_new= mysqli_fetch_assoc($result4);
									$stu_name=$row_new['fname']." ".$row_new['mname']." ".$row_new['lname'];
									$father_name=$row_new['father_name'];
									$id=$row_new['id'];
									$orderId = $row_new['admission_id'];
			
									$sql5="SELECT * FROM `membership` WHERE `orderId` = '$orderId'";
									$result5 = mysqlexec($sql5);
									$row_new2= mysqli_fetch_assoc($result5);
 
		 
									 $orderAmount = "200";
									 $referenceId = $row_new2['referenceId'];
									 $txStatus = $row_new2['txStatus'];
									 $paymentMode = $row_new2['paymentMode'];
									 $txMsg = "Online Admission Form Fee";
									 $txTime = $row_new2['txTime'];
									
									 
					

					?>


								
										  <br><center>
										  <h1 style="color:red;">Admission Form Receipt!</h1>
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
														<td><label>Student Name ::*</label></td>
														<td><?php echo $stu_name ?></td>
													</tr>
													<tr>
														<td>3</td>
														<td><label>Father Name ::*</label></td>
														<td><?php echo $father_name ?></td>
													</tr>
													<tr>
														<td>4</td>
														<td><label>TNX AMOUNT ::*</label></td>
														<td><?php echo $orderAmount ?></td>
													</tr>
													<tr>
														<td>5</td>
														<td><label>TNX ID ::*</label></td>
														<td><?php echo $referenceId ?></td>
													</tr>
													<tr>
														<td>6</td>
														<td><label>TNX STATUS ::*</label></td>
														<td><?php echo $txStatus ?></td>
													</tr>
													<tr>
														<td>7</td>
														<td><label>PAYMENT MODE ::*</label></td>
														<td><?php echo $paymentMode ?></td>
													</tr>
													<tr>
														<td>8</td>
														<td><label>RESPONSE MESSAGE ::*</label></td>
														<td><?php echo $txMsg ?></td>
													</tr>
													<tr>
														<td>9</td>
														<td><label>TNX DATE ::*</label></td>
														<td><?php echo $txTime ?></td>
													</tr>
													
													
												</tbody>
											</table><br><br>
											
										





</body>
</html>	
