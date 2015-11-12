<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>	
	<title>inlogregistratie - tutorialsite</title>
	<link rel="stylesheet" type="text/css" href="css/style.php">
	<link rel="stylesheet" media="(max-width:800px; )" type="text/css" href="css/style-mobile.css">
 </head>
 <body>
	<div id="container">
		<div id="banner">
			<?php include("banner.php"); ?>
		</div>	
		<div id="link">
			<?php include("link.php"); ?>
		</div>
		<div id="user">
			<?php include("user.php"); ?>
		</div>
		<div id="content">
			<?php include("redirect.php"); ?>
		</div>
		<div id="footer" >
			<?php include("footer.php"); ?>
		</div>
	</div>
 </body>
</html>

