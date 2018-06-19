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
	
	<!-- Css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Thambi" rel="stylesheet">
	<link rel="stylesheet" href="css/flexiblegs.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/AboutMe.css">
</head>
<body>
	<?php require_once("Includes/header.php");?>
	<section>
		<div class="wrap xl-center buttons">
			<div id="AboutMe">
				<div class="col xl-1-1">
					<h1>
						About Me
					</h1>
					<h2>
						I am happy to see you here. My name is Jeroen van der Rhee. Who are you?
					</h2>
				</div>
			</div>
		</div>
	</section>

	<section>		
		<div class="wrap xl-center" id="HeadMessage">
			 <div class="col xl-1-2 sm-1-1 left">
			 		<p class="Introduce">
			 			My name is Jeroen van der Rhee<br>
						I am 17 years old and currently enrolled into a Creative Media and Game Technologies course at the University of Applied Science at Rotterdam<br>In 2017, I graduated from the school of Higher General Secondary Education at Wartburg College Guido de Brès. Here I started liking coding. Some of my cases are projects from those schools.
					</p>
				<p>
					<a href="Projects.php">
						<span class="button">
							MORE PROJECTS
						</span>
					</a>
				</p>
			 </div>
			 <div class="col xl-1-2 sm-1-1 right">
  				<p>
  					<img src="img\Jeroen-van-der-Rhee.png" alt="Portret Jeroen van der Rhee, Jeroen van der Rhee, Jeroen van der Rhee photo"/>
  				</p>
			 </div>
		</div>
	</section>

		<section>		
		<div class="wrap xl-center" id="Skills">
			<div class="col xl-1-2 sm-1-1 left">
  				<p>
  					<img src="img\Skills.png" alt="Skills Image, Men with headphone, Skill images"/>
  				</p>
			 </div>
			 <div class="col xl-1-2 sm-1-1 right">
			 		<p class="Skillsdescription">
			 			I have had an interest in coding from quite an early age, which means I have practices and learned many coding languages (HTML, CSS, PHP, MySQL, Javascript, TypeScript and Arduino).<br><br>
			 			I also have experience with various Adobe programs, among which Photoshop, inDesign, Illustrator, Permière Pro, After Effects and Adobe XD. </br>
			 			Apart from all that, I also quite frequently use Google Adwords and Google Analytics.
					</p>
			 </div>
		</div>
	</section>


	<section>
		<div class="wrap xl-center buttons">
			<div id="MainContact">
				<div class="col xl-1-1">
					<h2>
						CONTACT ME
					</h2>
					<span class="mainalign">
						<p>			
							If you have a question about me or my projects, do not hesitate to contact me.
						</p>
					</span>
					<p>
						<a href="Contact.php">
							<span class="button">
								CONTACT ME
							</span>
						</a>
					</p>	
				</div>
			</div>
		</div>
	</section>

	<?php require_once("Includes/footer.php");?>
	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>