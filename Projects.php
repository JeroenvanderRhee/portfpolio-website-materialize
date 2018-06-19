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
	<link rel="stylesheet" href="css/Projects.css">
</head>
<body>
	<?php require_once("Includes/header.php");?>
	<section>
		<div class="wrap xl-center buttons">
			<div id="Projects">
				<div class="col xl-1-1">
					<h1>
						Projects
					</h1>
					<h2>
						Let me show you some of my most beautiful projects.
					</h2>
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


	<section>		
		<div class="wrap xl-center" id="FirstProject">
			 <div class="col xl-1-2 sm-1-1 links">
  				<p>
  					<img src="img\Macbook-Titan.png" alt="Project Image, Project Website, Titan 2, Macbook Titan, Project Jeroen van der Rhee"/>
  				</p>
			 </div>
			 <div class="col xl-1-2 sm-1-1 rechts">
			 	<p>
			 		I created this project at the age of 15. This was my first ever CSS project.
				</p>
				<p>
					<a href="Titan.php">
						<span class="button">
							VIEW THIS PROJECT
						</span>
					</a>
				</p>
			 </div>
		</div>
	</section>

	<section>		
		<div class="wrap xl-center" id="SecondProject">
			 <div class="col xl-1-2 sm-1-1 links2">
			 	<p>
			 		The goal of this project was to build a game. The game was about a mouse who wanted cheese. For this game, I did the graphics.
				</p>
				<p>
					<a href="Game.php" alt="Project Game, mouse game, mouse, Project Jeroen, Sven, Sven van Asperen, Jeroen van der Rhee">
						<span class="button">
							VIEW THIS PROJECT
						</span>
					</a>
				</p>
			 </div>			 
			 <div class="col xl-1-2 sm-1-1 rechts2">
  				<p>
  					<img src="img\Game-Project.png" alt="Project Image"/>
  				</p>
			 </div>
		</div>
	</section>

	<section>		
		<div class="wrap xl-center" id="FirstProject">
			 <div class="col xl-1-2 sm-1-1 links">
  				<p>
  					<img src="img\PWS-Mockup.png" alt="PWS Report Jeroen van der Rhee and Jesse Spiering, PWS, Wartburg College, Build a login page"/>
  				</p>
			 </div>
			 <div class="col xl-1-2 sm-1-1 rechts">
			 	<p>
			 		When I was still in high school, my final project was to build a login portal using PHP and MySQL.
				</p>
				<p>
					<a href="PWS.php">
						<span class="button">
							VIEW THIS PROJECT
						</span>
					</a>
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
							Do you want to say hello, perhaps ask a question or two? 
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