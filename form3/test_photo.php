

                 
           

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admission Form</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="./style2.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</head>
<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->
<header class="header">
  <h1 class="header__title" id="xyz" style="color:blue;">Admission Form</h1>
  </header>
<!--PEN CONTENT     -->
<div class="content">
  <!--content inner-->
  <div class="content__inner">
    <div class="container">
      <!--content title-->
      <h4 style="color:red;">Instruction:</h4>
      <!--animations form-->
      <!--content title-->
     
	  <Ol style="color:red;margin-left:25px;margin-bottom:50px;">
		<li>Do not use short forms.</li>
		<li>Spelling/ names  filled in the form must be as that given on the mark sheet of previous class/last board exam and T.C.
</li>
<li>If child is admitted for the first time, his/her name should be given only after it is confirmed once the child is admitted: his/her name will not be changed.</li> 
</ol>

    </div>
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-12 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Student Info</button>
              <button class="multisteps-form__progress-btn" type="button"  title="Address">Aadhar/Bank detail</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Address/Parents Info</button>
              <button class="multisteps-form__progress-btn" type="button" title="Comments">Upload Documents        </button>
			  
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-12 m-auto">
            <form role="form" class="multisteps-form__form" name="admission_form" method="post" action="function2.php"  enctype="multipart/form-data">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Student Information</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-4">
                      <input class="multisteps-form__input form-control"  type="text"  id="fname" name="fname" placeholder="First Name"/>
                    </div>
					<div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" id="mname" name="mname" placeholder="Middle Name"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" type="text" id="lname"  name="lname" placeholder="Last Name"/>
                    </div>
                  </div>
				  <div class="form-row mt-4">
					  <div class="col-12 col-sm-4">
						<label for="admission_class">Class:</label>
						<select class="form-control" name="stu_class" id="stu_class">
											<option value="nursery">Nursery</option>
											<option value="1st">1st</option>
											<option value="2nd">2nd</option>
											<option value="3rd">3rd</option>
											<option value="4th">4th</option>
											<option value="5th">5th</option>
											<option value="6th">6th</option>
											<option value="7th">7th</option>
											<option value="8th">8th</option>
											<option value="9th">9th</option>
											<option value="10th">10th</option>
											<option value="11th">11th</option>
											<option value="12th">12th</option>
										   
						</select>
						</div>
					  <div class="col-12 col-sm-4">
								<label for="birth_date">DOB :</label>
								<input type="date" class="form-control" name="dob" id="dob">
						</div>
						
						<div class="col-12 col-sm-4">
						<label for="gender">Gender:</label>
						<select class="form-control" name="gender" id="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										  
						</select>
						</div>
				  
					</div>
					
					<div class="form-row mt-4">
					  <div class="col-12 col-sm-4">
						<label for="religion">Religion:</label>
						<select class="form-control" id="religion" name="religion">
											<option value="Jain">Jain</option>
											<option value="Hindu">Hindu</option>
											<option value="Muslim">Muslim</option>
											
										   
						</select>
						</div>
					  <div class="col-12 col-sm-4 mt-4 mt-sm-0">
					  <label for="caste">Caste:</label>
                      <input class="multisteps-form__input form-control" id="caste" name="caste" type="text" placeholder="Caste"/>
                    </div>
						
						<div class="col-12 col-sm-4">
						<label for="mother_tongue">Mother Tongue:</label>
						<select class="form-control" name="mother_tongue" id="mother_tongue">
											<option value="Engish">English</option>
											<option value="Hindi">Hindi</option>
										  
						</select>
						</div>
				  
					</div>
					<div class="form-row mt-4">
                    <div class="col-12 col-sm-4">
					<label for="concession_type">Concession Type:</label>
                      <input class="multisteps-form__input form-control" type="text" placeholder="Concession Type" name="concession_type" id="concession_type"/>
                    </div>
					<div class="col-12 col-sm-4">
						<label for="blood_group">Blood Group:</label>
						<select class="form-control" name="blood_group" id="blood_group">
											<option value="O-">O-</option>
											<option value="O+">O+</option>
											<option value="A-">A-</option>
											<option value="A+">A+</option>
											<option value="B-">B-</option>
											<option value="B+">B+</option>
											<option value="AB-">AB-</option>
											<option value="AB+">AB+</option>
										  
						</select>
						</div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
					<label for="boarding_category">Boarding Category:</label>
                      <input class="multisteps-form__input form-control" type="text" id="boarding_cat" name="boarding_cat" placeholder="Boarding Category"/>
                    </div>
                  
				  </div>
				  
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-4">
						<label for="board">Board:</label>
						<input class="multisteps-form__input form-control" type="text" id="board" name="board" placeholder="Board"/>
                    </div>
					<div class="col-12 col-sm-4 mt-4 mt-sm-0">
					<label for="distance">Distance From School:</label>
                      <input class="multisteps-form__input form-control" type="text" id="distance" name="distance" placeholder="Distance From School"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
					<label for="school_bus">School Bus:</label>
                      <input class="multisteps-form__input form-control" type="school_bus" id="school_bus" name="school_bus" placeholder="School Bus"/>
                    </div>
                  
				  </div>
				  
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<label for="e_number">Emergency Number:</label>
                      <input class="multisteps-form__input form-control" type="text" id="emg_number" name="emg_number" placeholder="Emergency Number"/>
                    </div>
					<div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<label for="email_id">Email Id:</label>
                      <input class="multisteps-form__input form-control" type="email" id="email_id" name="email_id" placeholder="Email Id"/>
                    </div>
                  
				  </div>
				  
				  <div class="col-sm-4">
				
                <center><img src="dummy.png" id="stu_photo_tag" style="margin-top:20px"width="300" height="300"></center>
                <label for="photo">Upload Student Photo:</label>
    				
    				<input type="file"  name="stu2_photo" onchange="stu_photo_(event)">
					<script type="text/javascript">
						function stu_photo_(event) 
						{
							 var reader = new FileReader();
							 reader.onload = function()
							 {
							  var output = document.getElementById('stu_photo_tag');
							  output.src = reader.result;
							  
							 }
							 reader.readAsDataURL(event.target.files[0]);
							 
						}
					</script>			
					
				</div> 
                  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Student Aadhar card/Samagra Id Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-4">
					<label for="aadhar_no">Aadhar Card Number:</label>
                      <input class="multisteps-form__input form-control" type="text" id="aadhar_no" name="aadhar_no" placeholder="Aadhar Card Number"/>
                    </div>
					<div class="col-12 col-sm-4 mt-4 mt-sm-0">
					<label for="sssmid">SSSMID:</label>
                      <input class="multisteps-form__input form-control" type="text" id="sssmid" name="sssmid" placeholder="SSSMID"/>
                    </div>
                    <div class="col-12 col-sm-4 mt-4 mt-sm-0">
					<label for="school_bus">Family SSSMID:</label>
                      <input class="multisteps-form__input form-control" type="text" id="family_sssmid" name="family_sssmid" placeholder="Family SSSMID"/>
                    </div>
					
                  </div>
				  <h3 class="multisteps-form__title" style="margin-top:30px;">Bank Details</h3>
					<div class="form-row mt-4">
						<div class="col-12 col-sm-6">
						<label for="bank_number">Bank Account Number:</label>
						  <input class="multisteps-form__input form-control" type="text" id="account_no" name="account_no" placeholder="Account Number"/>
						</div>
						<div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<label for="account_name">A/C Holder Name:</label>
						  <input class="multisteps-form__input form-control" type="text" id="account_holder_name" name="account_holder_name" placeholder="A/C Holder Name"/>
						</div>`
						
					</div>
					<div class="form-row mt-4">
						<div class="col-12 col-sm-4">
						<label for="bank_name">Bank Name:</label>
						  <input class="multisteps-form__input form-control" type="text" id="bank_name" name="bank_name" placeholder="Bank Name"/>
						</div>
						<div class="col-12 col-sm-4 mt-4 mt-sm-0">
						<label for="Branch">Branch:</label>
						  <input class="multisteps-form__input form-control" type="text" id="bank_branch" name="bank_branch" placeholder="Branch"/>
						</div>
						<div class="col-12 col-sm-4 mt-4 mt-sm-0">
						<label for="school_bus">IFSC Code:</label>
						  <input class="multisteps-form__input form-control" type="text" id="bank_ifsc" name="bank_ifsc" placeholder="IFSC Code"/>
						</div>
					</div>
					
                     
					 <div class="row">
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="images/aadhar.jpg" id="aadhar_img_tag" style="margin-top:20px"width="250" height="250"></center>
							<label for="photo">Upload Student Aadhar:</label>
							<input type="file" class="form-control" id="aadhar_img" onchange="aadhar_image_(event)" name="aadhar_img">
							<script type="text/javascript">
								function aadhar_image_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('aadhar_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>	
						
						</div>
                      </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="images/sssmid.jpg" id="sssmid_img_tag" style="margin-top:20px"width="250" height="250"></center>
							<label for="photo">Upload Student SSSMID:</label>
							<input type="file" class="form-control" id="sssmid_img" onchange="sssmid_img_(event)" name="sssmid_img"></div>
							<script type="text/javascript">
								function sssmid_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('sssmid_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
                      </div>
                    </div>
					<div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="images/passbook.jpg" id="passbook_img_tag" style="margin-top:20px"width="250" height="250"></center>
							<label for="photo">Upload Bank Passbook:</label>
							<input type="file" class="form-control" id="passbook_img" onchange="passbook_img_(event)" name="passbook_img"></div>
							<script type="text/javascript">
								function passbook_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('passbook_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
                      </div>
                    </div>
                  </div>
					 
					 
					 
                  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" onClick='#xyz' title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
			  
			    <!-- Present Address -->
                <h3 class="multisteps-form__title">Present Address</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Address:</label>
						<input class="multisteps-form__input form-control" type="text" id="pre_address" name="pre_address" placeholder="Address"/>
                   	</div>  
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Tehsil:</label>
						<input class="multisteps-form__input form-control" type="text" id="pre_tehsil" name="pre_tehsil" placeholder="Tehsil"/>
                    </div>
					<div class="col-12 col-md-4 mt-4">
						<label for="board">City:</label>
						<input class="multisteps-form__input form-control" type="text" id="pre_city" name="pre_city" placeholder="City"/>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Distict:</label>
						<input class="multisteps-form__input form-control" type="text" id="pre_distict" name="pre_distict" placeholder="Distict"/>
                   	</div>  
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">State:</label>
						<input class="multisteps-form__input form-control" type="text" id="pre_state" name="pre_state" placeholder="State"/>
                    </div>
					<div class="col-12 col-md-4 mt-4">
						<label for="board">PIN Code:</label>
						<input class="multisteps-form__input form-control" type="text" id="pre_pincode" name="pre_pincode"placeholder="PIN Code"/>
                    </div>
                  </div>
				 </div>
				    <!--Permanent Address-->
				<h3 class="multisteps-form__title" style="margin-top:30px;">Permanent Address</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Address:</label>
						<input class="multisteps-form__input form-control" type="text" id="per_address" name="per_address" placeholder="Address"/>
                   	</div>  
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Tehsil:</label>
						<input class="multisteps-form__input form-control" type="text" id="per_tehsil" name="per_tehsil" placeholder="Tehsil"/>
                    </div>
					<div class="col-12 col-md-4 mt-4">
						<label for="board">City:</label>
						<input class="multisteps-form__input form-control" type="text" id="per_city" name="per_city" placeholder="City"/>
                    </div>
                  </div>
				  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Distict:</label>
						<input class="multisteps-form__input form-control" type="text" id="per_distict" name="per_distict" placeholder="Distict"/>
                   	</div>  
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">State:</label>
						<input class="multisteps-form__input form-control" type="text" id="per_state" name="per_state" placeholder="State"/>
                    </div>
					<div class="col-12 col-md-4 mt-4">
						<label for="board">PIN Code:</label>
						<input class="multisteps-form__input form-control" type="text" id="per_pincode" name="per_pincode" placeholder="PIN Code"/>
                    </div>
                  </div>
				    <!--Father Details-->
				  
				  <h3 class="multisteps-form__title" style="margin-top:30px;">Father Information</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<div>
							<label for="board">Father Name:</label>
							<input class="multisteps-form__input form-control" type="text" id="father_name" name="father_name" placeholder="Father Name"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Occupation:</label>
							<input class="multisteps-form__input form-control" type="text" id="father_occupation" name="father_occupation" placeholder="Occupation"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Org. Name:</label>
							<input class="multisteps-form__input form-control" type="text" id="father_org" name="father_org" placeholder="Org. Name"/>
						</div>
						
					</div>
					
					<div class="col-12 col-md-4 mt-4">
						<div>
							<label for="board">Qualification:</label>
							<input class="multisteps-form__input form-control" type="text" id="father_qualification" name="father_qualification"placeholder="Qualification"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Designation:</label>
							<input class="multisteps-form__input form-control" type="text" id="father_designation" name="father_designation" placeholder="Designation"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Annual Income:</label>
							<input class="multisteps-form__input form-control" type="text" id="father_income" name="father_income" placeholder="Annual Income"/>
						</div>
						
					</div>
					
					<div class="col-12 col-md-4 mt-4">
						
						<center><img src="dummy.png" id="father_photo_tag"style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Upload Father Photo:</label>
							<input type="file" class="form-control" id="father_photo" onchange="father_photo_(event)" name="father_photo">
							<script type="text/javascript">
								function father_photo_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('father_photo_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
   					</div>
				</div>  
                    
				<div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Mobile Number:</label>
						<input class="multisteps-form__input form-control" type="text" id="father_mobno" name="father_mobno" placeholder="Mob. Number"/>
                   	</div>  
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Whatsapp No.:</label>
						<input class="multisteps-form__input form-control" type="text" id="father_whatsapp" name="father_whatsapp" placeholder="Whatsapp No."/>
                    </div>
					
                  </div>
				  
				  </div>
				  
				  
				   <!--Mother Details-->
				  
				  <h3 class="multisteps-form__title" style="margin-top:30px;">Mother Information</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<div>
							<label for="board">Mother Name:</label>
							<input class="multisteps-form__input form-control" type="text" id="mother_name" name="mother_name" placeholder="Mother Name"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Occupation:</label>
							<input class="multisteps-form__input form-control" type="text" id="mother_occupation" name="mother_occupation" placeholder="Occupation"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Org. Name:</label>
							<input class="multisteps-form__input form-control" type="text" id="mother_org" name="mother_org" placeholder="Org. Name"/>
						</div>
						
					</div>
					
					<div class="col-12 col-md-4 mt-4">
						<div>
							<label for="board">Qualification:</label>
							<input class="multisteps-form__input form-control" type="text" id="mother_qualification" name="mother_qualification"placeholder="Qualification"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Designation:</label>
							<input class="multisteps-form__input form-control" type="text" id="mother_designation" name="mother_designation"placeholder="Designation"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Annual Income:</label>
							<input class="multisteps-form__input form-control" type="text" id="mother_income" name="mother_income" placeholder="Annual Income"/>
						</div>
						
					</div>
					
					<div class="col-12 col-md-4 mt-4">
						
						<center><img src="dummy.png" id="mother_photo_tag"style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Upload Mother Photo:</label>
							<input type="file" class="form-control" id="mother_photo" onchange="mother_photo_(event)" name="mother_photo">
							<script type="text/javascript">
								function mother_photo_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('mother_photo_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
   					</div>
				</div>  
                    
				<div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Mobile Number:</label>
						<input class="multisteps-form__input form-control" type="text" id="mother_mobno" name="mother_mobno" placeholder="Mob. Number"/>
                   	</div>  
                    <div class="col-12 col-md-4 mt-4">
						<label for="board">Whatsapp No.:</label>
						<input class="multisteps-form__input form-control" type="text" id="mother_whatsapp" name="mother_whatsapp" placeholder="Whatsapp No."/>
                    </div>
					
                  </div>
				  
				  </div>
				  
				  
				   <!--Guardian Details-->
				  
				  <h3 class="multisteps-form__title" style="margin-top:30px;">Guardian Information</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
						<div>
							<label for="board">Guardian Name:</label>
							<input class="multisteps-form__input form-control" type="text" id="guardian_name" name="guardian_name" placeholder="Guardian Name"/>
						</div>
						<div>
							<label for="board" style="margin-top:25px;">Mobile Number:</label>
							<input class="multisteps-form__input form-control" type="text" id="guardian_mobno" name="guardian_mobno" placeholder="Mobile Number"/>
						</div>
						
					</div>
					
					<div class="col-12 col-md-4 mt-4">
						<div>
							<label for="board" >Relation:</label>
							<input class="multisteps-form__input form-control" type="text" id="guardian_relation" name="guardian_relation" placeholder="Relation"/>
						</div>
						
						<div>
							<label for="board" style="margin-top:25px;">Address:</label>
							<input class="multisteps-form__input form-control" type="text" id="guardian_address" name="guardian_address" placeholder="Address"/>
						</div>
						
						
					</div>
					
					<div class="col-12 col-md-4 mt-4">
						
						<center><img src="dummy.png" id="guardian_photo_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Upload Guardian Photo:</label>
							<input type="file" class="form-control" id="guardian_photo" onchange="guardian_photo_(event)" name="guardian_photo">
							<script type="text/javascript">
								function guardian_photo_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										 var output = document.getElementById('guardian_photo_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
   					</div>
				</div>  
                    
				
				  
				  </div>
				  
				  
				  
				  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                     </div>
                  </div>
                </div>
              </div>
			  
			  

              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Upload Documents</h3>
                <div class="multisteps-form__content">
                  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="transfer_certificate.png" id="transfer_img_tag"style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Transfer Certificate:</label>
							<input type="file" class="form-control" name="transfer_img" onchange="transfer_img_(event)" id="transfer_img"></div>
							<script type="text/javascript">
								function transfer_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('transfer_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="PREVIOUS_CLASS_MARKSHEET.png" id="previous_marksheet_img_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Previous Class Marksheet:</label>
							<input type="file" class="form-control" name="previous_marksheet_img" onchange="previous_marksheet_img_(event)" id="previous_marksheet_img"></div>
							<script type="text/javascript">
								function previous_marksheet_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('previous_marksheet_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>

						</div>
                    </div>
					<div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="BIRTH_CERTIFICATE.png" id="birth_img_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Birth Certificate:</label>
							<input type="file" class="form-control" name="birth_img" onchange="birth_img_(event)" id="birth_img"></div>
                      
							<script type="text/javascript">
								function birth_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('birth_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                  </div>
				  
				  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="MIGRATION_CERTIFICATE.png" id="migration_img_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Migration Certificate:</label>
							<input type="file" class="form-control" name="migration_img" onchange="migration_img_(event)" id="migration_img"></div>
							<script type="text/javascript">
								function migration_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('migration_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="CASTE_CERTIFICATE.png" id="caste_img_tag"style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Caste Certificate:</label>
							<input type="file" class="form-control" name="caste_img" onchange="caste_img_(event)" id="caste_img"></div>
							<script type="text/javascript">
								function caste_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('caste_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
					<div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="BLOOD_GROUP.png" id="blood_group_img_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Blood Group:</label>
							<input type="file" class="form-control" name="blood_group_img" onchange="blood_group_img_(event)" id="blood_group_img"></div>
							<script type="text/javascript">
								function blood_group_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('blood_group_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                  </div>
				  
                  
              
			  
			  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="FAMILY_PHOTO.png" id="family_photo_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Family Photo:</label>
							<input type="file" class="form-control" name="family_photo" onchange="family_photo_(event)" id="family_photo"></div>
							<script type="text/javascript">
								function family_photo_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('family_photo_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="OTHER_DOCUMENT1.png" id="doc1_img_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Other Document1:</label>
							<input type="file" class="form-control" name="doc1_img" onchange="doc1_img_(event)" id="doc1_img"></div>
							<script type="text/javascript">
								function doc1_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('doc1_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
					<div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="OTHER_DOCUMENT2.png" id="doc2_img_tag" style="margin-top:20px"width="200" height="200"></center>
							<label for="photo">Other Document2:</label>
							<input type="file" class="form-control"  name="doc2_img" onchange="doc2_img_(event)" id="doc2_img"></div>
							<script type="text/javascript">
								function doc2_img_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('doc2_img_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                  </div>
				  
				  <div class="row">
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="STUDENT_SIGN.png" id="student_sign_tag" style="margin-top:20px"width="200" height="100"></center>
							<label for="photo">Student Signature:</label>
							<input type="file" class="form-control" name="student_sign" onchange="student_sign_(event)" id="student_sign"></div>
							<script type="text/javascript">
								function student_sign_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('student_sign_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
                    <div class="col-12 col-md-4 mt-4">
                      <div class="card shadow-sm">
                        <div class="card-body">
							<center><img src="PARENTS_SIGN.png" id="parents_sign_tag" style="margin-top:20px"width="200" height="100"></center>
							<label for="photo">Parents Signature:</label>
							<input type="file" class="form-control" name="parents_sign" onchange="parents_sign_(event)" id="parents_sign"></div>
							<script type="text/javascript">
								function parents_sign_(event) 
									{
										 var reader = new FileReader();
										 reader.onload = function()
										 {
										  var output = document.getElementById('parents_sign_tag');
										  output.src = reader.result;
										 }
										 reader.readAsDataURL(event.target.files[0]);
									}
							</script>
					  </div>
                    </div>
					<div class="col-12 col-md-4 mt-4">
                     
                  </div>
				  
				  
				   <div class="row">
						<div class="col-12 col-md-12 mt-4">
							<!-- <iframe src="admissionform.pdf" style="width:100%; height:100%;" frameborder="1"></iframe>
							-->
							<center>
							<br>
							<h3 style="color:red;">Undertaken By Parents</h3>
							<br>
							<embed src="admissionform.pdf" width="900px" height="1024px" />
						    </center>
						</div>
					</div>
						</div>
				  <div class="row">
						<div class="col-12 col-md-12 mt-4">
							<p><input type="checkbox" name="declaration">
							I have applied for admission of my son/daughter in Gyanodaya  school khurai. I have read and understood the rules of school. I assure to abide by all the rules, school will have the right to struck off the name of my son/daughter from the rolls.</p>
						</div>
					</div>
				  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
					
					<button type="submit" name="review_form" class="btn btn-success ml-auto">Preview</button>
                    <button type="submit" name="submit_form" class="btn btn-success ml-auto">Submit</button> 
					
					
                  </div>
                </div>
			  
			  
			  </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>



<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'></script>
<script  src="./script.js"></script>

</body>
</html>