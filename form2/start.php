<?php include_once("functions.php"); ?>
<?php
 //echo "UserId=".$_POST['userId'];
 $userId=$_POST['userId'];


$appId="1539868e0fa5c6635fb99710189351";

$orderId="ORDS" . rand(10000,99999999);
$sql = "UPDATE
				   orderid 
				SET
				   order_number = '$orderId',
				   userid='$userId'
				";

		$result = mysqlexec($sql);
		if ($result) {
			//echo "<script>alert(\"Successfully updated orderid\")</script>";
			

		}
		else{
			echo "Error";
		}
		
$sql_new = "SELECT * FROM customer WHERE cust_id = $userId";
$result_new = mysqlexec($sql_new);
$row_new= mysqli_fetch_assoc($result_new);

$orderAmount=$_POST['membership'];
$orderCurrency="INR";
$orderNote="Testing";
$customerPhone=$row_new['mobno'];
$customerEmail=$row_new['email'];

$sql_new1 = "SELECT * FROM users WHERE id = $userId";
$result_new1 = mysqlexec($sql_new1);
$row_new1= mysqli_fetch_assoc($result_new1);
$customerName=$row_new1['username'];

$returnUrl="http://localhost/matrimony/cashfree_output.php";
$notifyUrl="http://localhost/matrimony/cashfree_output.php";





 
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Cashfree-PG TestForm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body onload="document.frm1.submit()">
    <br>
    <br>
    <div class="container fluid">
      
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
    </div>
    <br>    
    <br>    
    <br>    
    <br>    
  </body>
</html>

