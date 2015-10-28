<?php
	var_dump($_POST);
	
	//Maak contact met de mysql-server
	require("db_connect.php");
	
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
	
	var_dump($result);
	
	if ($result) 
	{
		// Geef feedback aan de gebruiker dat de registratie is gelukt. Stuur de gebruiker door naar de hompage.
		echo "gelukt";
	}
	else
	{
		// Geef de gebruiker de aanwijzing om een mail te sturen naar info@inlogregistratietutorialsite.nl en verwijs door naar de homepage.
		echo "mislukt";
	}
	
	// Huiswerk dit formulier werkend maken tot en met het wegschrijven naar de database en 
	// het redirecten naar een andere pagina + succes/faal melding.