<?php
	//echo "Ik ga jou activeren...je id = ".$_GET["id"];
	include("db_connect.php");
	
	$query = "UPDATE 	`users` 
			  SET 		`activation` = 'true'
			  WHERE 	`id` = ".$_GET["id"].";";
			  
	$result = mysqli_query($conn, $query);
	
	
	if ($result)
	{
		// Stel de gebruiker op de hoogte dat het activeren is gelukt. Stuur door naar login_form.php
		echo "Het activeren van uw account is succesvol verlopen. U wordt doorgestuurd naar de inlogpagina.";
		header("refresh:4;url=index.php?content=login_form");
	}
	else
	{
		// Vertel de gebruiker dat hij contact moet opnemen met systeembeheer via inf@inlogregistratietutorialsite.nl.
		// Stuur de gebruiker door naar de homepage header(refresh)
		echo "Uw account is helaas niet geactiveerd. Neem contact op met uw systeembeheerder. U wordt doorgestuurd naar de startpagina.";
		header("refresh:4;url=index.php?content=homepage");
	}
	//var_dump($result);
?>