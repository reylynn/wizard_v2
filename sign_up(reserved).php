<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto: 400,100,300,500">

	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">

	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/newStyle.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
        $(document).ready(function(){
        	var step1 = $("#form-group-account");
	        var step2 = $("#form-group-personal");
	        var step3 = $("#form-group-bank");
	        var nextbtn2 = $("#next-form2");
	        var nextbtn3 = $("#next-form3");
	        var nextbtn4 = $("#next-form4");
	        var donebtn = $("#done");

	        step1.show();
	        step2.hide();
	        step3.hide();
	        nextbtn2.show();
	        donebtn.hide();	

	        $(nextbtn2).on("click", function(event) {
	        	event.preventDefault()

	        	step1.hide();
	        	step2.show();
	        	step3.hide();
	        	nextbtn3.show();
	        	donebtn.hide();
       		 });

	        $(nextbtn3).on("click", function(event) {
	        	event.preventDefault()

	        	step1.hide();
	        	step2.hide();
	        	step3.show();
	        	nextbtn4.show();
	        	donebtn.hide();
       		 });

        });   

    </script>

	<title> Wizard Test </title>
</head>

<body oncontextmenu="return false;">

	<section class="form-box">
	<div class="container">

			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">

					<div class="form-wizard form-body-material form-header-classic">

						<form name="signupForm" role="form" action="register.php" method="POST">
							<h3> Sign Up Your User Account </h3>
							<p> Fill all form field to go next step </p>

							<!-- Form Progress -->
							<div class="form-wizard-steps form-wizard-tolal-steps-4">
							
								<div class="form-wizard-progress">
									<div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width:12.25%;"> </div>
								</div>
							</div>	

							<!-- Step 1 -->
							<div class="form-wizard-step active">
								<div class="form-wizard-step-icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
								<p> Account </p>
							</div>

							<!-- Step 2 -->
							<div class="form-wizard-step">
								<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
								<p> Personal </p>
							</div>

							<!-- Step 3 -->
							<div class="form-wizard-step">
								<div class="form-wizard-step-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
								<p> Bank </p>
							</div>

							<!-- Step 4 -->
							<div class="form-wizard-step">
								<div class="form-wizard-step-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
								<p> Success </p>
							</div>
					

							<!-- Form Step 1 -->
							<fieldset>

								<div id="form-group-account">
								<!-- Progress Bar -->
								<div class="progress">
									<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
									</div>
								</div>
								<!-- Progress Bar -->

									<h4> Account Information: <span> Step 1-4 </span> </h4>

									<div class="input-group">
										<label> Email: <span> * </span> </label>
										<input type="email" name="email" placeholder="Email" class="form-control required">
									</div>

									<div class="input-group">
										<label> User Name: <span> * </span> </label>
										<input type="username" name="username" placeholder="Username" class="form-control required">
									</div>
								
									<div class="input-group">
										<label> Password: <span> * </span> </label>
										<input type="password" name="password" placeholder="Password" class="form-control required">
									</div>
							
									<div class="input-group">
										<label> Confirm Password: <span> * </span> </label>
										<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control required">
									</div>
									<br />
									<div class="form-wizard-buttons">
										<button id="next-form2" class="btn nextbtn"> Next </button> 
									</div>
								</div>
							</fieldset>
							<!-- End Form Step 1 -->

							<!-- Form Step 2 -->
							<fieldset>
							
								<div id="form-group-personal">
								<!-- Progress Bar -->
								<div class="progress">
									<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
									</div>
								</div>
								<!-- Progress Bar -->

									<h4> Personal Information: <span>  2 - 4 </span> </h4>

									<div class="input-group">
										<label> First Name: <span> * </span> </label>
										<input type="text" name="firstname" placeholder="First Name" class="form-control required">
									</div>
									
									<div class="input-group">
										<label> Middle Name: </label>
										<input type="text" name="middlename" placeholder="Middle Name" class="form-control required">
									</div>
									
									<div class="input-group">
										<label> Last Name: <span> * </span> </label>
										<input type="text" name="lastname" placeholder="Last Name" class="form-control required">
									</div>

									<div class="input-group">
										<label> Birthday: <span> * </span> </label>
										<input type="date" data-date-inline-picker="true" name="birthday" placeholder="yyyy-mm-dd"  class="form-control required">	
										</div>

									<div class="input-group">
										<label> Address: <span> * </span> </label>
										<input type="date" name="address" placeholder="Address"  class="form-control required">
									</div>

									<div class="input-group">
										<label> Contact Number: <span> * </span> </label>
										<input type="date" name="contact_no" placeholder="Contact"  class="form-control required">
									</div>

									<br />
									<div class="form-wizard-buttons">
										<button id="next-form3" class="btn nextbtn"> Next </button> 
									</div>
								</div>
							</fieldset>
							<!-- End Form Step 2 -->

							<!-- Form Step 3 -->
                            <fieldset>

                            	<div id="form-group-bank">
								<!-- Progress Bar -->
								<div class="progress">
								  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
								  </div>
								</div>
								<!-- Progress Bar -->

	                                <h4>Bank Information: <span>Step 3 - 4</span></h4>
	                                <div class="form-group">
	                    			    <label>Bank Name: <span>*</span></label>
	                                    <input type="text" name="Bank Name" placeholder="Bank Name" class="form-control required">
	                                </div>
									<div class="form-group">
	                    			    <label>Branch Name: <span>*</span></label>
	                                    <input type="text" name="Holder Name" placeholder="Holder Name" class="form-control required">
	                                </div>
									<div class="form-group">
	                    			    <label>Account Name: <span>*</span></label>
	                                    <input type="text" name="Account Name" placeholder="Account Name" class="form-control required">
	                                </div>
									<div class="form-group">
	                    			    <label>Account Number: <span>*</span></label>
	                                    <input type="text" name="Account Number" placeholder="Account Number" class="form-control required">
	                                </div>
									
									<div class="form-group">
										<label>Account Create: <span>*</span> </label>
										 <input type="date" name="Account Create" placeholder="Account Create" class="form-control required">
									</div>
									
									<br />
	                                <div class="form-wizard-buttons">
										<button id="next-form4" class="btn nextbtn"> Next </button> 
									</div>
	                           	</div>
                            </fieldset>
							<!-- End Form Step 3 -->

							

						</form>
					</div>
				</div>
			</div>	
		</div>
	</section>

	<!-- Jquery JS -->
        <script src="js/jquery-1.11.1.min.js"></script>
	<!-- bootStrap JS -->
		<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		
		
	<!-- Plugin Custom JS -->
    	<script src="js/form-wizard.js"></script>
    <!-- Plugin Custom JS -->

</body>
</html>