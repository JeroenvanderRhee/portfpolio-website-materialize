<!DOCTYPE html>
<html lang="en">
<head>
	<!--Description-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jeroen van der Rhee | Portfolio Website</title>
	<meta name="author" content="Jeroen van der Rhee">

	<!--icon-->
	<link rel="icon" href="img/Favicon.png">
	
	<!--Important Scripts-->
	<script src="js/time.js"></script>

	<!-- Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
	<link rel="stylesheet" href="css/flexiblegs.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/ProjectPage.css">
</head>
<body>
	<?php require_once("Includes/header.php"); ?>
	<section>
		<div id="Slider">
			<h1>
				Building a website
			</h1>
  		  	
  		  	<img class="Slides" src="img/Projects/Titan/iMac-Titan.png" style="margin-bottom:1px"  alt="Project Image, Project Website, Titan 2, Macbook Titan, Project Jeroen van der Rhee">	
  			<img class="Slides" src="img/Projects/Titan/Macbook-Titan.png" style="margin-bottom:1px"  alt="Project Image, Project Website, Titan 2, Macbook Titan, Project Jeroen van der Rhee">
  			<img class="Slides" src="img/Projects/Titan/iPad-Titan.png" style="margin-bottom:1px"  alt="Project Image, Project Website, Titan 2, Macbook Titan, Project Jeroen van der Rhee">
			
			<div class="wrap xl-center hoogte">
				<div class="col xl-1-3">
    				<span class="Slide-left" onclick="PlusSlide(-1)">
    					<i class="fa fa-chevron-left" aria-hidden="true"></i>
    				</span>
    			</div>

				<div class="col xl-1-3">
    				<span class="Round" onclick="CurrentSlide(1)"></span>
    				<span class="Round" onclick="CurrentSlide(2)"></span>
    				<span class="Round" onclick="CurrentSlide(3)"></span>
    			</div>
  			
  				<div class="col xl-1-3">
    				<span class="Slide-right" onclick="PlusSlide(1)">
    					<i class="fa fa-chevron-right" aria-hidden="true"></i>
    				</span>
    			</div>
    		</div>

		</div>
	</section>

	<section>
		<div class="wrap xl-center">
			<div id="Text">
				<p class="first alignleft">
					This was my first project at the Wartburg College for Computer Science. This project took me three months. During these three months I improved my skills for HTML and CSS.
				</p>
				<p class="alignleft">
					In this project, we were given the task build a website for the Titan 2. This computer was the best computer of its time. The content on the website is lorum ipsum text because this project was about improving your skills, not about content.
				</p>
				<p class="alignleft">
					With the button you can visit this project. If you have a question, please contact me.
				</p>
				<p class="ButtonMargin">
					<a href="Titan_Website/index.html" target="_blank">
						<span class="button">
							VIEW THE WEBSITE
						</span>
					</a>
				</p>
			</div>
		</div>
	</section>
	<?php require_once("Includes/footer.php"); ?>
	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/Slider.js"></script>
</body>
</html>