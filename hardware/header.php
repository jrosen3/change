<!DOCTYPE html>

<html> <!--manifest="native.manifest">-->
	<!--
	Note: The web server must serve the manifest file as MIME type
	text/cache-manifest, or else Safari will ignore it.

	Add the following line to your apache conf or .htaccess file:

	AddType text/cache-manifest .manifest

	Double check that it's being served with the right MIME type.

	You can use "wget -S" to look at the server headers coming back
	with a file.
	-->

	<head>
		<!-- The name of the app on the home screen -->
		<title>Change</title>
		
		<!-- Prevent scaling -->
		<meta name="viewport" content="user-scalable=no, width=device-width" />
		
		<!-- Eliminate url and button bars if added to home screen -->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		
		<!-- Choose how to handle the phone status bar -->
		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		
		<!-- Specify a 320x460 start-up image. -->
		<link rel="apple-touch-startup-image" href="./startup.png" />
		
		<!-- Choose a 57x57 image for the icon -->
		<link rel="apple-touch-icon" href="./apple-touch-icon.png" />

		<!-- JQuery Mobile -->
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

		<script src="js/jquery.cycle.all.js"></script> <!--http://jquery.malsup.com/cycle/adv.html-->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/idle-timer.min.js"></script>
		
	</head>

	<body ontouchmove="BlockMove(event);">
		<script>
			// To be called when there's a move event on the body itself:
			function BlockMove(event) {
				// Tell Safari not to move the window.
				event.preventDefault();
			}

			// returns width of browser viewport
			var width = $(window).width(); 

			// rests to homepage after 30 seconds
			$.idleTimer(10000);
			$(document).bind("idle.idleTimer", function(){
 				// function you want to fire when the user goes idle
 				$.mobile.changePage("#ad");
			});

			// globas
			var user_name = "Jared";
			var email = "jaredarosen@gmail.com";
			var amount = 6;

		</script>
	<!-- body closed in index.php and login.php -->
<!-- html closed in index.php and login.php -->





