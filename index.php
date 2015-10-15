<?php
	
?>
<!DOCTYPE html>
<html>
 <head>	
	<title>inlogregistratie - tutorialsite</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" media="(max-width:800px; )" type="text/css" href="css/style-mobile.css">
 </head>
 <body>
	<div id="container">
		<div id="banner">
			Banner
		</div>
		
		<!--Maak hier een div voor de hyperlinks. Geef het divje een id="link"-->
		<div id="link">
			<a href="index.php?content=homepage">home</a>
			<a href="index.php?content=register_form">test</a>
			<a href="index.php?content=test2">test2</a>
			<a href="index.php?content=test3">test3</a>
		</div>
		
		<div id="content">
			<?php
				if ( isset($_GET["content"]))
				include($_GET["content"].".php");
				else
				include("homepage.php");
			?>
		</div>
		<div id="footer" >
			footer
		</div>
	</div>
 </body>
</html>

