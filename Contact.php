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
	<link rel="stylesheet" href="css/Contact.css">
</head>
<body>
	<?php require_once("Includes/header.php");?>
	<section>
		<div class="wrap xl-center buttons">
			<div id="Contact">
				<div class="col xl-1-1">
					<h1>
						Contact Me
					</h1>
					<h2>
						Nice to meet you! <br> Do you want to say hello? Or do you have a question? Please contact me. I will respond in 24 hours.
					</h2>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="wrap xl-center buttons">
			<div id="ContactForm">
				<div class="col xl-1-1">
					<form method="post">
						<input type="text" name="Name" placeholder="Your Name" class="field">							<br>
						<input type="email" name="Email" placeholder="Your Email-adress" class="field">					<br>
						<input type ="text" name="Subject" placeholder="The Subject" class="field">						<br>
						<textarea type ="text" name="Message" placeholder="Your Message" class="bigfield"></textarea>	<br>
						<input class="SendButton" type="submit" name="Send" value="Send Message">
					</form>
				</div>
			</div>
		</div>
	</section>

	<?php
		//Dit zijn de variabelen voor de header
		$From = 'From: Website Jeroenvanderrhee.nl <website@jeroenvanderrhee.nl>';
		$Header = "Content-type: text/html; charset=iso-8859-1\r\n";  
        $Header .= "MIME-Version: 1.0\r\n";  
        $Header .= $From;
        
        //Dit zijn de gegevens van de klant
		$Name = $_POST['Name'];
		$EmailAdress = $_POST['Email'];
		$Subject = $_POST['Subject'];
		$Message = $_POST['Message'];
		
		//Het bericht naar de beheerder van de website	
	    $MessageAdmin = wordwrap("<html><body><b>Subject: " .$Subject. "</b><br><br>" .$Message. "<br><br>Naam: ".$Name. "<br>Email-adres: ".$EmailAdress. "</body></html>");

	    //Dit bericht word naar degene gestuurd wie de reactie heeft geplaatst
	    $MessageCustomer = wordwrap("<html><body>Dear ".$Name. ",<br><br> Thanks for your reaction on my site. I wil response to you in 24 hours. Below this message, you can see the details from your reaction<br><br> Yours faithfully<br>Jeroen van der Rhee<br><br><b>Details: </b><br>Subject: ".$Subject. "<br>Message: ".$Message. "<br>Name: ".$Name."<br>EmailAdress: ".$EmailAdress."<br><br>You can't response to this email.</body></html>");

	    //Hier word het emailadres gecontroleerd
		if(filter_var($EmailAdress, FILTER_VALIDATE_EMAIL)){
		    $check = "true";
		}
		
		//Hier worden de mails gestuurd.
		if((isset($_POST["Send"]))&& ($check == "true")){
			mail("jeroenvdrhee@upcmail.nl" , "Reactie op Jeroenvanderrhee.nl: " .$Subject , $MessageAdmin, $Header);

			mail($EmailAdress, "Your reaction on Jeroenvanderrhee.nl",$MessageCustomer,$Header);
		}
	?>
	<?php require_once("Includes/footer.php");?>
	<!-- Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>