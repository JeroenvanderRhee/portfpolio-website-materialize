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
</head>
<body>
	<?php require_once("Includes/header.php"); ?>
	<section>
		<div class="wrap xl-center buttons">
			<div id="welcome">
				<div class="col xl-1-1">
					<header class="edit-header">
						<h1 id="GreetVisitor">
							<noscript>
								Hello
							</noscript>
						</h1>
						<h2 id="Introduce">
							My name is Jeroen van der Rhee
						</h2>
						<h3 id="IntroduceDescription">
							And I am a professional web developer
						</h3>
						<p id="IntroduceMeParagraph">
							<a href="AboutMe.php">
								<span class="button">
									ABOUT ME
								</span>
							</a>
						</p>
	  				</header>
		  			<!-- particles.js container -->
			   		<div id="particles-js">
			   		</div>
				</div>
			</div>
		</div>
	</section>

	<section>		
		<div class="wrap xl-center" id="HeadProject">
			 <div class="col xl-1-2 sm-1-1 links">
  				<p>
  					<img src="img/Game-Project.png" alt="Project Game, mouse game, mouse, Project Jeroen, Sven, Sven van Asperen, Jeroen van der Rhee"/>
  				</p>
			 </div>
			 <div class="col xl-1-2 sm-1-1 rechts">
			 	<p>
			 		The goal of this project was to build a game. The game was about a mouse who wanted cheese. For this game, I did the graphics.
				</p>
				<p>
					<a href="Projects.php">
						<span class="button">
						MORE PROJECTS
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
							Do you want to say hello, perhaps ask a question or two? Please contact me.
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

	<?php require_once("Includes/footer.php"); ?>
	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/time.js"></script>
	<script src="js/particles.js"></script>
	<script src="js/app.js"></script>
</body>
</html>