<!DOCTYPE html>
<html>

	<head>
		<title>HOME</title>
		<link href="styles/basicpagestyle.css" rel="stylesheet"> 
		<link href="styles/frontpagestyle.css" rel="stylesheet"> 
		<link href="styles/slideshowstyle.css" rel="stylesheet"> 
	</head>

	<body id="homePage">
		<div id="header">
			[LOGO + SEARCH]

			<div class="right shadow" style="width: 200px; min-height: 20px; padding: 5px 10px 0px 10px; background-color: white; font-size: 12px; vertical-align: middle; -webkit-border-radius: 5px 5px 5px 5px; border-radius: 5px 5px 5px 5px;">Search</div>
		</div>

		<?php include("navmenu.html"); ?> 

		<div id="main" class="clear">
			<div id="scrollBanner">
				<div id="slides">
					<img src="assets/images/slideshow/banner_u_guelph.jpg"></img>
					<img src="assets/images/slideshow/banner_u_laurentian.jpg"></img>
					<img src="assets/images/slideshow/banner_u_ottawa.jpg"></img>
					<img src="assets/images/slideshow/banner_u_toronto.jpg"></img>
					<img src="assets/images/slideshow/banner_u_waterloo.jpg"></img>
					<img src="assets/images/slideshow/banner_u_western.jpg"></img>
					<img src="assets/images/slideshow/banner_u_york.jpg"></img>

					<a href="#" class="slidesjs-previous slidesjs-navigation left"><img src="assets/images/slideshow/lbutton.png"></img></a> 
					<a href="#" class="slidesjs-next slidesjs-navigation right"><img src="assets/images/slideshow/rbutton.png"></img></a>
				</div>
			</div>

			<div id="topicBox">
				<div class="wrapperSmall">
					<h1>Top Ontario Schools Quicklinks:</h1>
					<ol start="1">
						<li><a href="#">University of Toronto</a></li>
						<li><a href="#">University of Waterloo</a></li>
						<li><a href="#">Queen's University</a></li>
						<li><a href="#">McMaster University</a></li>
						<li><a href="#">Western University</a></li>
					</ol>
					<br><br>
					<p style="text-align: right; font-size: 12px;"><a href="schools.php">View All Schools &#8658</a></p>
				</div>

				<div class="wrapperSmall">
					<h1>Top Canadian Programs:</h1>
					<ol start="1">
						<li><a href="#">Pharmaceutical Science</a></li>
						<li><a href="#">Math and Computer Science</a></li>
						<li><a href="#">Chemical Engineering</a></li>
						<li><a href="#">Electrical Engineering</a></li>
						<li><a href="#">Mechanical Engineering</a></li>
					</ol>
					<br><br>
					<p style="text-align: right; font-size: 12px;"><a href="programs.php">Compare Programs &#8658</a></p>
				</div>

				<div class="wrapperSmall">
					<h1>International Students Information:</h1>
					<ul>
						<li><a href="http://www.cic.gc.ca/english/study/study.asp">Study Permit</a></li>
						<li><a href="http://www.cic.gc.ca/english/study/study-extend.asp">Renew Study Permit</a></li>
						<li><a href="http://www.cic.gc.ca/english/study/work.asp">Work Permit</a></li>
						<li><a href="http://www.educationau-incanada.ca/educationau-incanada/canada/index.aspx?view=d">Canadian Student Life</a></li>
						<li><a href="http://www.cic.gc.ca/ctc-vac/getting-started.asp">Step-By-Step Eligibility Guide</a></li>
					</ul>
					<br><br>
					<p style="text-align: right; font-size: 12px;"><a href="exchange.php">Learn More &#8658</a></p>

				</div>
			</div>

			<!--<div id="content">
				[home content]
			</div>-->
		</div>

		<div id="footer" class="clear">
			&copy 2013. All Rights Reserved.
		</div>

		<!--jquery scripts--> 
		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="scripts/jquery.slides.min.js"></script>
		<!--end jquery scripts--> 

	  	<script>
	    	$(function() {
		      	$('#slides').slidesjs({
			       	width: 880,
			        height: 300,
    				navigation: false
		      	});
	    	});
	 	 </script>

	</body> 

</html>