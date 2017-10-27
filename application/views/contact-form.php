<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.min.js"></script>
</head>
<body>
<div class="col span_2_of_3" style="width:50%">
				  <div class="contact-form">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-6 col-offset-3">
                                  <div class="form-group">
				  	<h2>Place Appointment</h2>				
					    <form method="POST" action="contact/submitContact">
					    	<div>
						    	<span><label>Full Name</label></span>
						    	<span><input name="userName" type="text" class="textbox" required=" "></span>
                                <?php echo form_error('userName'); ?>
								</div>
						    <div>
						    	<span><label>E-Mail Address</label></span>
                                <input type="userEmail" class="form-control" name="email" placeholder="Email" required="" value="">
                                <?php echo form_error('email','<span class="help-block">','</span>'); ?>
						    </div>
						    <div>
						     	<span><label>Contact Number</label></span>
						    	<span><input name="userPhone" type="number" class="form-control" required=" "></span>
								<?php echo form_error('userPhone'); ?>
						    </div>
						    <div>
						    	<span><label>Special Notes</label></span>
						    	<span><textarea name="userNote"> </textarea></span>
								<?php echo form_error('userNote'); ?>
						    </div>
                            <div>
                                <span><label>Date for Appointment</label></span>
                                <span><input name="appDate" type="date" class="textbox" required></span>
                                <?php echo form_error('appDate'); ?>
                            </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="submit1"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				</body>
</html>