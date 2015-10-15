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
								   'de',
								   'Ruijter',
								   'adruijter@gmail.com');";
								   
	$result = mysqli_query($conn, $query);
	
	if ($result)
	{
		echo "gelukt";
	}
	else
	{
		echo "mislukt";
	}
	
	