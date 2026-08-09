<?php include("functions.php"); 

if (isset($_GET['data'])) {
    // Decode the data from the query string
    parse_str($_SERVER['QUERY_STRING'], $output);
    $data = $output['data']; // Access the array
    console.log($data);
   
    // Check if it's an array
    if (is_array($data)) {
        
        require_once("../include/dbconn.php");
        
        // Start the HTML table
        
        echo "<table border='1' cellspacing='0' cellpadding='5'><tr><td>sno</td><td>name</td><td>mob_no</td><td>payment</td><td>payment_date</td></tr>"; // Table headers

        // Loop through the array and populate the table
        $blank = "";
        $i = 1;
        foreach ($data as $key => $value) {
            
            $sql2="SELECT * FROM customer WHERE cust_id = ".$value;
        	$result2=mysqlexec($sql2);
        	
        	$row = mysqli_fetch_array($result2);
        	
        	$name = $row['firstname'];
    	    $mob = $row['mobno'];
        
        	echo "<tr><td>".$i."</td><td>".$name."</td><td>".$mob."</td><td>".$blank."</td><td>".$blank."</td></tr>";
            $i++;
        }

        // End the HTML table
        echo "</table>";
        
        printArrayInTable($data);
        // Check if the button was clicked
        if (isset($_POST['submit'])) {
            // Call the function to print the array in a table
            printArrayInTable($data);
        }
    
    } else {
        echo "The data is not an array.";
    }
} else {
    echo "No data found.";
}


function printArrayInTable($data) {
           
    require_once("../include/dbconn.php");
    $arr = "";
    // Set headers to force download the CSV file
    $currentDate = date('d-m-Y'); // Format: YYYY-MM-DD

    // Create a filename using the current date
    $filename = "evershine_data_upload_" . $currentDate . ".xls";

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment;filename='.$filename);
    
    $html = "<table><tr><td>sno</td><td>name</td><td>mob_no</td><td>payment</td><td>payment_date</td></tr>";
   
    // Open PHP output stream for writing
    $output = fopen('php://output', 'w');
    fputcsv($output, $html);
    
    
    // Loop through the array using the 'for' loop
    for ($i = 1; $i <= count($data); $i++) {
        $arr.=$data[$i].', ';
       // echo $data[$i] . "<br>";
        $sql2="SELECT * FROM customer WHERE cust_id = ".$data[$i];
    	$result2=mysqlexec($sql2);
    	
    	$row = mysqli_fetch_array($result2);
    	
    	$name = $row['firstname'];
	    $mob = $row['mobno'];
    	//fputcsv($output, $row);
    	$html ="<tr><td>".$i."</td><td>".$name."</td><td>".$mob."</td></tr>";
    	//print_r($name);
    	fputcsv($output, $html);
    }
    $html .="</table>";
    return $html;
    fclose($output);
    exit;
   
}
 ?>
 
 <!-- HTML Form with Button -->
 <!--
<form method="post" action="">
    <input type="submit" name="submit" value="Display Data">
</form>

-->
