<?php session_start(); ?>
<!DOCTYPE html>
<html>
 <head>	
	<title>inlogregistratie - tutorialsite</title>
	<link rel="stylesheet" type="text/css" href="css/style.php">
	<link rel="stylesheet" media="(max-width:800px; )" type="text/css" href="css/style-mobile.css">
	<script src="./jquery/jquery-2.1.4.js"></script>
	<!--<script src="./jquery/jquery-2.1.4.min.js"></script>-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->
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
		<div id="userrole_link">
			<?php include("userrole_link.php"); ?>
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


