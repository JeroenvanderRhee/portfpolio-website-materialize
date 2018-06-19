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
				Building a Game
			</h1>
   			<img class="Slides" src="img/Projects/Game/Cover-Game.png" alt="Project Game, mouse game, mouse, Project Jeroen, Sven, Sven van Asperen, Jeroen van der Rhee"> 			
  			<img class="Slides" src="img/Projects/Game/iMac-Game.png" alt="Project Game, mouse game, mouse, Project Jeroen, Sven, Sven van Asperen, Jeroen van der Rhee">
  			<img class="Slides" src="img/Projects/Game/Macbook-Game.png" alt="Project Game, mouse game, mouse, Project Jeroen, Sven, Sven van Asperen, Jeroen van der Rhee">
			
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
					When I was in fifth grade of for higher general secondary education, we were given an assignment to design a game. Our game was about a mouse that wants cheese.
				</p>
				<p class="alignleft">
					I made all the visuals for this game. he game was originally Dutch, with “Ik wil kaas” as its original name, the name translates roughly to "I want cheese".
				</p>
				<p class="alignleft">
					If you have questions, or you want to play this game, please contact me.
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