<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Wedding Art-All About Wedding</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--slider-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<!-- jQuery -->
 <script src="js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</head>

<style type="text/css">
	.sidebar-box {
			max-height: 120px;
			position: relative;
			padding: 20px;
			overflow: hidden;
		}

	.sidebar-box .read-more { 
			position: absolute; 
			bottom: 0; left: 0;
			width: 100%; 
			text-align: center; 
			margin: 0; 
			padding: 30px 0 30px 0; 
			
			/* "transparent" only works here because == rgba(0,0,0,0) */ 
			background-image: linear-gradient(to bottom, transparent, black);
				background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, transparent),color-stop(1, white));
		}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="js/jquery.min.js"></script>
</head>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js'></script>
	<script>
		// DOM Ready
		$(function() {
		
			var $el, $ps, $up, totalHeight;
			
			$(".sidebar-box .button").click(function() {
			
				// IE 7 doesn't even get this far. I didn't feel like dicking with it.
						
				totalHeight = 0
			
				$el = $(this);
				$p  = $el.parent();
				$up = $p.parent();
				$ps = $up.find("p:not('.read-more')");
				
				// measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
				$ps.each(function() {
					totalHeight += $(this).outerHeight();
					// FAIL totalHeight += $(this).css("margin-bottom");
				});
							
				$up
					.css({
						// Set height to prevent instant jumpdown when max height is removed
						"height": $up.height(),
						"max-height": 9999
					})
					.animate({
						"height": totalHeight
					});
				
				// fade out read-more
				$p.fadeOut();
				
				// prevent jump-down
				return false;
					
			});
		
		});
	</script>

<body>

 <div class="banner">
	    <div class="flexslider">
	          <ul class="slides">
	            <li><img src="images/banner1.jpg" alt=""/></li>
	  	    	<li><img src="images/banner2.jpg"  alt=""/></li>
	  	    	<li><img src="images/banner3.jpg"  alt=""/></li>
	  	    	<li><img src="images/banner4.jpg"  alt=""/></li>
	          </ul>
	    </div>
   </div>
   <div class="content-top">
		<div class="wrap">
			<div class="content-topbox">
				<div class="col_1_of_bottom span_1_of_bottom">
					<img src="images/pic6.jpg" alt="">
				     
				     <div class="sidebar-box">
						<h5>Why You Should Consider Hiring a WeddingArt</h5>
						<p>Your friends and family are not a substitute for a professional wedding planner - They have their own jobs and personal responsibilities to attend to, and may not have the time and energy to devote to your wedding.</p>
						<p class="read-more"><a href="#" class="button">Read More</a></p>
					</div>
				</div>

				<div class="col_1_of_bottom span_1_of_bottom">
					<img src="images/pic7.jpg" alt="">

				     <div class="sidebar-box">
				     	<h5>Why Hire Us?</h5>
						<p>Well-Coordinated Weddings - We maintain a very close customer relationship and make sure that all parties will always know what will happen next during the Wedding Day. </p>
						<p class="read-more"><a href="#" class="button">Read More</a></p>
					</div>
				</div>

				<div class="col_1_of_bottom span_1_of_bottom">
					<img src="images/pic8.jpg" alt="">
				     <div class="sidebar-box">
				     	<h5>Packages</h5>
						<p>Do you want a Creative wedding, Theme wedding, Budget Wedding Plan or just the Wedding Day Coordination; we’ve got the perfect package to suit your requirements. </p>
						<p class="read-more"><a href="#" class="button">Read More</a></p>
					</div>
				</div>

				  <div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="content-middle">
		<div class="wrap">
			<div class="section group">
				<div class="lsidebar span_1_of_3">
				      <h3><span>Welcome</span></h3>
				      <h3>Traditionally, planning a wedding has always been a long process which involves a lot of time, money, effort, stress and high risks. Our Wedding Sri Lanka provides a key role in making sure that you enjoy your wedding day as you have dreamed of, and we will make sure that all things will go smoothly according to the plan.</h3>
					  <p>Our Wedding Sri Lanka is the dream of Lucky Arsacularatne that became a reality in 2007. Lucky’s vision was to establish the first one stop shop for weddings in Sri Lanka that embodied the highest standards of quality and service. Subsequently, Our Wedding Sri Lanka’s team of Wedding Planners have been incorporating the elements of artistic flair, superb organizational skills and budget management control to create the wedding visions of their clientele.</p>
				</div>
					<div class="cont span_2_of_3">
				       <div class="section group example">
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src="images/list-img.png">
							</div>
							  <div class="heading">
							   <h3><a href="#">PORU & SETEEBACKS</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim </p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src="images/list-img1.png">
							</div>
							  <div class="heading">
							   <h3><a href="#">DANSING & PERFORMANCES</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim </p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
		    			</div>
		    			 <div class="section group example">
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src="images/ring.png">
							</div>
							  <div class="heading">
							   <h3><a href="#">CARD & CAKE BOXES</a></h3>
							   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut wisi enim ad minim</p>
			 				   </div>
			 				   <div class="clear"></div>
			 				</div>
							<div class="col_1_of_2 span_1_of_2">
							<div class="icon">
								<img src="images/gift.png">
							</div>
							  <div class="heading">
							   <h3><a href="#">PHOTOGRAPHY/VIDEOGRAPHY</a></h3>
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
