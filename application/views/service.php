<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Brighton Website Template | Gallery :: w3layouts</title>
<link href=<?php echo base_url();?>css/style.css rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- light-box -->
<script src=<?php echo base_url();?>js/jquery.min.js></script>
<script type="text/javascript" src=<?php echo base_url();?>js/jquery.fancybox.js></script>
<link rel="stylesheet" type="text/css" href=<?php echo base_url();?>css/jquery.fancybox.css media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});
	</script>
</head>
<body>

	<div class="about-top">
		<div class="wrap">
			<div class="about-box">
			   <div class="section group" >
           <?php
           foreach($serviceDetails as $service){
             $url=$service["url"];
             $title= $service["title"];
             $description=$service["description"];
             echo "<div class='col_1_of_4 span_1_of_4' name='currentService'	>
                         <a class='fancybox' href=$url data-fancybox-group='gallery' title=$title ><img src=$url alt='' style='width:100%'><span> </span></a>
                   <div class='caption'>
                                 <h4>$title</h4>
                                 <p>$description</p>
																 <div class='radio'>
																 <label><input type='radio' name='optradio'	>$title</label>
																 </div>

                                 <a href='#' class='btn1'>see more</a>
                             </div>
             </div>";
           }
           ?>
				<div class="clear"></div>
			</div>
		 </div>
	  </div>
	</div>
	<div class="content-middle">
		<div class="wrap">
			<div class="section group">
				<div class="lsidebar span_1_of_3">
				      <h3><span>Welcome</span></h3>
				      <h3>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</h3>
					  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ulla Ut wisi enim ad minimLorem ipsum dolor sit amet, consectetuer adipiscing elit, </p>
				</div>
					<div class="cont span_2_of_3">
				       <div class="section group example">
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src=<?php echo base_url();?>images/list-img.png>
							</div>
							  <div class="heading">
							   <h3><a href="#">Lorem ipsum dolor</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim  </p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src=<?php echo base_url();?>images/list-img1.png>
							</div>
							  <div class="heading">
							   <h3><a href="#">Lorem ipsum dolor</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim </p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
		    			</div>
		    			 <div class="section group example">
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src=<?php echo base_url();?>images/ring.png>
							</div>
							  <div class="heading">
							   <h3><a href="#">Lorem ipsum dolor</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim</p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src=<?php echo base_url();?>images/gift.png>
							</div>
							  <div class="heading">
							   <h3><a href="#">Lorem ipsum dolor</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim veniam</p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
		    			</div>
				    </div>
				     <div class="clear"></div>
		   		</div>
		</div>
	</div>
