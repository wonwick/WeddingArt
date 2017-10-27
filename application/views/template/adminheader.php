
<script src=<?php echo base_url();?>js/jquery.min.js></script>
<div class="header">
	<link rel="stylesheet" href=<?php echo base_url();?>css/style.css>
		<div class="wrap">
			<div class="logo">
				<a href=<?php echo base_url(); ?>home><img src=<?php echo base_url();?>images/logonn.png alt=""/></a>
			</div>
			<div class="top-nav">
				<div class="menu">
				<span class="menu"> </span>
			   		<ul>
						<li><a href=<?php echo base_url(); ?>home>Home</a></li>
						<li class=""><a href=<?php echo base_url(); ?>changePics>Manage Pictures</a></li>
						<li class=""><a href=<?php echo base_url(); ?>Upload_image>Add Services</a></li>
						<li class=""><a href=<?php echo base_url(); ?>home>User View</a></li>
                        <li class=""><a href=<?php echo base_url(); ?>users/logut>Logout</a></li>
					</ul>
					<div class="clear"></div>
	   		  	</div>
				<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
	   	   </div>
			<div class="clear"></div>
	  </div>
 </div>
