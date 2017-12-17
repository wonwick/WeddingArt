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
                                  <div class="form-control">
				  	<h2>Place Appointment</h2>
					    <form method="POST" action="contact/submitContact">
					    	<div>
						    	<span><label>Full Name</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>

								</div>
						    <div>
						    	<span><label>E-Mail Address</label></span>
                                <input type="text" class="form-control" name="userEmail" placeholder="Email">

						    </div>
						    <div>
						     	<span><label>Contact Number</label></span>
						    	<span><input name="userPhone" type="number" class="form-control" placeholder="Phone Number"></span>

						    </div>
						    <div>
						    	<span><label>Special Notes</label></span>
						    	<span><textarea name="userNote" class="form-control"> </textarea></span>

						    </div>
                            <div>
                                <span><label>Date for Appointment</label></span>
                                <span><input name="appDate" type="date" class="form-control"></span>

                            </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="submit1"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				</body>
</html>
