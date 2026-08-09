<?php include("functions.php"); ?>

<?php
if(isloggedin()){
 //do nothing stay here
} else{
   header("location:../userlogin/login.php");
}
?>

<?php include('header.php'); ?>
<html>
<head>
 <center><h2 style="color:red;align:center">Fetch Record Between dates</h1></center>
  <br><br>
   <form action="all_date.php"  method="POST">
  
    <div class="form-group col-sm-6" style="margin-left:150px;"> 
    <div class="form-group col-sm-2">
		      <label for="edit-name" style="margin-left:0px;">Start Date: <span class="form-required" title="This field is required."></span></label>                        <div class="select-block1">
	                <select style="margin-left:0px;" name="sday" required>
						<option value="" disabled selected hidden>DD</option>
	                    <option value="01">01</option>
						  <option value="02">02</option>
						  <option value="03">03</option>
						  <option value="04">04</option>
						  <option value="05">05</option>
						  <option value="06">06</option>
						  <option value="07">07</option>
						  <option value="08">08</option>
						  <option value="09">09</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25">25</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="29">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
	               
	                </select>
			    </div>
		    </div>
			<div class="form-group col-sm-2">
			 <label for="edit-name"></label>
		        <div class="select-block1">
	                <select style="margin-left:0px;margin-top:5px;" name="smonth" required>
						<option value="" disabled selected hidden>MM</option>
	                    <option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">Aug</option>
						<option value="09">Sept</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
	               
	                </select>
			    </div>
		    </div>
			<div class="form-group col-sm-2">
		      <label for="edit-name"></label>
			    <div class="select-block1">
	                <select style="margin-left:0px;margin-top:5px;"name="syear" required>
						
	                    <option value="2020" selected>2020</option>
						  
						  
	               
	                </select>
			    </div>
		    </div>
			
	</div>		
			

</div>




<div class="form-group col-sm-6" style="margin-left:150px;"> 
    <div class="form-group col-sm-2">
		      <label for="edit-name" style="margin-left:0px;">End Date: <span class="form-required" title="This field is required.">*</span></label>
			    <div class="select-block1">
	                <select style="margin-left:0px;" name="eday" required>
						<option value="" disabled selected hidden>DD</option>
	                    <option value="01">01</option>
						  <option value="02">02</option>
						  <option value="03">03</option>
						  <option value="04">04</option>
						  <option value="05">05</option>
						  <option value="06">06</option>
						  <option value="07">07</option>
						  <option value="08">08</option>
						  <option value="09">09</option>
						  <option value="10">10</option>
						  <option value="11">11</option>
						  <option value="12">12</option>
						  <option value="13">13</option>
						  <option value="14">14</option>
						  <option value="15">15</option>
						  <option value="16">16</option>
						  <option value="17">17</option>
						  <option value="18">18</option>
						  <option value="19">19</option>
						  <option value="20">20</option>
						  <option value="21">21</option>
						  <option value="22">22</option>
						  <option value="23">23</option>
						  <option value="24">24</option>
						  <option value="25">25</option>
						  <option value="26">26</option>
						  <option value="27">27</option>
						  <option value="28">28</option>
						  <option value="29">29</option>
						  <option value="30">30</option>
						  <option value="31">31</option>
	               
	                </select>
			    </div>
		    </div>
			<div class="form-group col-sm-2">
			 <label for="edit-name"></label>
		        <div class="select-block1">
	                <select style="margin-left:0px;margin-top:5px;" name="emonth" required>
						<option value="" disabled selected hidden>MM</option>
	                    <option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">Aug</option>
						<option value="09">Sept</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
	               
	                </select>
			    </div>
		    </div>
			<div class="form-group col-sm-2">
		      <label for="edit-name"></label>
			    <div class="select-block1">
	                <select style="margin-left:0px;margin-top:5px;"name="eyear" required>
						
	                    <option value="2020"selected>2020</option>
						 
						 
	               
	                </select>
			    </div>
		    </div>
			
	</div>		
			

</div>

 
			
			
		      
		    
	<br>	
    <div class="form-group col-sm-6" style="margin-left:150px;"> 
        <div class="form-group col-sm-4">	
        <label>Gender:</label>
            
             <select style="margin-left:30px;margin-top:5px;align:right;" name="gender" required>
						
	                    <option value="any">Any</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
						
	               
	                </select> 
             
        </div>
         <div class="form-group col-sm-2">	
        
        </div>	
    </div>	


    <div class="form-group col-sm-6" style="margin-left:150px;"> 
        <div class="form-group col-sm-2">	
        
        </div>	
        <div class="form-group col-sm-2">	
             <input type="submit" id="submit" width="900px" height="600px" name="submit" value="Submit" >
        </div>
         <div class="form-group col-sm-2">	
        
        </div>	
    	
    	

	
</div>			 		
</div>	
</div>
</form>

<br><h2 style="color:red;align:center">Fetch Record According to Mobile Number</h1>	
    <h3 style="color:red">Enter Mobile Number:<h3>	    
    <form action="all_date.php" method="POST" name="search_mobno">
    <input type="text" name="mobno">
    <input type="submit" value="Submit" name="mob_submit">
    </form>
   