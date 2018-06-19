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
	<?php require_once("Includes/header.php");?>

	<section>
		<div id="Slider">
			<h1>
				Final Report
			</h1>
  			
  			<img class="Slides" src="img/Projects/PWS/PWS-MockupCover.jpg" alt="PWS Report Jeroen van der Rhee and Jesse Spiering, PWS, Wartburg College, Build a login page">
  			<img class="Slides" src="img/Projects/PWS/PWS-MockupInside.jpg" alt="PWS Report Jeroen van der Rhee and Jesse Spiering, PWS, Wartburg College, Build a login page">
  			<img class="Slides" src="img/Projects/PWS/PWS-MockupPaper.png" alt="PWS Report Jeroen van der Rhee and Jesse Spiering, PWS, Wartburg College, Build a login page">
			
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
					In The Netherlands, during your last year in high school you have to make a so called “profielwerkstuk”; a final project. The idea we had was to teach ourselves PHP and MySQL.<br>
					We would then, with the knowledge we gathered, build a login portal for a website. I did this project in collaboration with a classmate of mine (Jesse Spiering), it took us about six months.
				</p>
				<p class="alignleft">
					When we were finished with the login portal, we were given the assignment to write a detailed report about our process, the steps we took in building our login portal. We did this in the form of a manual, giving you the instructions on how to build a login portal by yourself. <br>
					We then got to present our project to our teachers, friends and family to close the project.
				</p>
				<p class="alignleft">
					If you want to read the report for yourself, if you have any questions, or if you want to learn how to build a login portal using PHP and MySQL, feel free to contact me.
				</p>
				<p class="ButtonMargin">
					<a href="Contact.php">
						<span class="button">
							CONTACT ME
						</span>
					</a>
				</p>
			</div>
		</div>
	</section>

	<?php require_once("Includes/footer.php");?>
	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/Slider.js"></script>
</body>
</html>