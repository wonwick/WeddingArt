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


			   <div class="section group" >
           <?php
           foreach($serviceDetails as $service){
             $url=$service["url"];
             $title= $service["title"];
             $description=$service["description"];
						 $serviceId=$service["serviceId"];
             echo "<div class='col_1_of_4 span_1_of_4' name='currentService'	>
                         <a class='fancybox' href=$url data-fancybox-group='gallery' title=$title ><img src=$url alt='' style='width:100%'><span> </span></a>
                   <div class='caption'>
                                 <h4>$title</h4>
                                 <p>$description</p>
																 <div class='radio'>
																 <label><input type='radio' name='optradio'	value=$serviceId onchange=>$title</label>
																 </div>

                                 <a href='#' class='btn1'>see more</a>
                             </div>
             </div>";
           }
           ?>
				<div class="clear"></div>
			</div>







	</div>
