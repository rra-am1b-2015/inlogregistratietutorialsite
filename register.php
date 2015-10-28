<?php
	//var_dump($_POST);
	
	//Maak contact met de mysql-server
	include("db_connect.php");
	
	// Definieer je insert-query
	
	$query = "INSERT INTO `users` (`id`,
								   `firstname`,
								   `infix`,
								   `lastname`,
								   `email`) 
			  VALUES 			  (NULL,
								   '".$_POST["firstname"]."',
								   '".$_POST["infix"]."',
								   '".$_POST["lastname"]."',
								   '".$_POST["email"]."');";
								   
	$result = mysqli_query($conn, $query);
	
	//var_dump($result);
	
	if ($result) 
	{
		echo "Uw gegevens zijn correct ontvangen. U ontvangt op het aangegeven e-mailadres een bevestiging van uw registratie met een activatielink. Nadat u hier op heeft geklikt en een nieuw wachtwoord heet gekozen kunt u inloggen. U wordt doorgestuurd naar de homepage.";
		$emailaddress = $_POST["email"].", freek@gmail.com";
		$title = "Bedankt voor het registreren.";
		$message = "Hallo";
		$header = "From: Docent Applicatie en mediaontwikkeling Arjan de Ruijter <rra@mboutrecht.nl>\r\n";
		$header .= "Cc: info@test.nl\r\n";
		mail($emailaddress, $title, $message, $header);
		header("refresh: 6; url=index.php?content=homepage");
	}
	else
	{
		echo "Uw gegevens zijn niet correct ontvangen. Meldt dit bij info@inlogregistratietutorialsite.nl. U wordt doorgestuurd naar de homepage.";
		header("refresh: 6; url=index.php?content=homepage");
	}