<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<title>Angel Negron - Project 1</title>
		<link rel="shortcut icon" href="images/favicon.ico">


		<meta name="viewport" content="width=device-width, initial-scale=1">

			<!--[if lt IE 9]>
				<script src="js/html5shiv-printshiv.min.js"></script>
			<![endif]-->

		<!-- FONTS -->
			<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,600&display=swap" rel="stylesheet">
		<!-- STYLES -->

		<!-- lightbox if needed -->
			<link href="lightbox/src/css/lightbox.css" rel="stylesheet" />
		<!--Slick if needed -->
			<link rel="stylesheet" href="slick/slick/slick.css"/>
		<!-- Normal CSS styles -->
		<link type="text/css" rel="stylesheet" href="styles.css" />

		<!--jQuery-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	</head>



	<body>
		<!-- HEADER SECTION -->
		<header>
			<img class="thelogo" src="images/angellogo.png" alt="Angel Negron Logo" >



			<nav class="menu">
				<ul>
					<li> <a href="index.html">Design</a> </li>
					<li> <a href="illustration.html">Illustration</a> </li>
					<li> <a href="about.html">About Me</a> </li>
					<li> <a href="contact.html">Contact</a> </li>
				</ul>
			</nav>

			<nav class="desktop-menu">
				<ul>
					<li> <a href="contact.html">Contact</a> </li>
					<li> <a href="about.html">About Me</a> </li>
					<li> <a href="illustration.html">Illustration</a> </li>
					<li> <a href="index.html">Design</a> </li>
				</ul>
			</nav>


			<h1>Angel Negrón</h1>
				<p>designer<span class="orangeletter">&nbsp; |&nbsp; </span>illustrator <span class="orangeletter">&nbsp; |&nbsp; </span> web</p>

			<button class="hamburger">&#9776;</button>
	  	<button class="cross">&#735;</button>








		</header>



    <!-- MAIN CONTENT SECTION -->
		<main>

 //From processing takes place here. message displayed here too
<?
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'angelnegronart.com' // Put you mail domain here
	,
	'Angel Negron Project 1 Website' // Put your site name / form name here
	,
	'negron.a@ufl.edu' // Where will the form notification be sent?
	,
	'forms@angelnegronart.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->



		</main>

		<!-- FOOTER AND ITS CONTENT SECTION -->
		<footer>
			<h4 class="backbutton">Back to the Top</h4>
			<a href="https://www.linkedin.com/in/angel-negron-1637a189"> <img src="images/linkein.png" alt="LinkedIn icon"> </a>
			<p>All work is the property of Angel Negron unless otherwise noted. © Angel Negron 2020</p>
		</footer>
		<!--hamburger script -->
		<script src="js/javascript.js">	</script>
		<!--lightbox -->
		<script src="lightbox/src/js/lightbox.js"></script>

	</body>

</html>
