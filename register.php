<?php
	//var_dump($_POST);
	$password = date("d-m-Y-").substr($_POST["firstname"], 0, 3)."-".substr($_POST["lastname"], strlen($_POST["lastname"])-4, 4).date("-H:i:s");
	//echo MD5($password);	
	//exit();
	$password_hash = MD5($password);
	
	//Maak contact met de mysql-server
	include("db_connect.php");
	
	// Definieer je insert-query	
	$query = "INSERT INTO `users` (`id`,
								   `firstname`,
								   `infix`,
								   `lastname`,
								   `email`,
								   `password`) 
			  VALUES 			  (NULL,
								   '".$_POST["firstname"]."',
								   '".$_POST["infix"]."',
								   '".$_POST["lastname"]."',
								   '".$_POST["email"]."',
								   '".$password_hash."');";
	//echo $query; exit();					   
	$result = mysqli_query($conn, $query);
	
	$id = mysqli_insert_id($conn);
	//var_dump($id);
	//var_dump($result);
	
	switch($_SERVER["HTTP_HOST"])
	{
		case "localhost":
			$activation_link = "http://localhost/2015-2016/blok1/am1b/inlogregistratietutorialsite/index.php?content=activation&id=".$id."&pw=".$password_hash."";
			break;
		case "rra-am1a-2015.esy.es":
			$activation_link = "http://rra-am1a-2015.esy.es/am1b/index.php?content=activation&id=".$id."&pw=".$password_hash."";
			break;
	}
	
	if ($result) 
	{
		echo "Uw gegevens zijn correct ontvangen. U ontvangt op het aangegeven e-mailadres een bevestiging van uw registratie met een activatielink. Nadat u hier op heeft geklikt en een nieuw wachtwoord heet gekozen kunt u inloggen. U wordt doorgestuurd naar de homepage.";
		$emailaddress = $_POST["email"].", freek@gmail.com";
		$title = "Bedankt voor het registreren.";
		$message = "
		<html>
			<head>
			</head>
			<body>
				<h3 style='color:grey; font-family:Verdana; font-size:12px;'>Bedankt voor het registreren. Door <a href='".$activation_link."'>hier</a> te klikken activeert u het account en kunt u inloggen</h3>
			</body>		
		</html>";
		$header = "From: Docent Applicatie en mediaontwikkeling Arjan de Ruijter <rra@mboutrecht.nl>\r\n";
		$header .= "Cc: info@test.nl\r\n";
		$header .= "Content-type:text/html;charset=UTF-8\r\n";
		mail($emailaddress, $title, $message, $header);
		header("refresh: 6; url=index.php?content=homepage");
	}
	else
	{
		echo "Uw gegevens zijn niet correct ontvangen. Meldt dit bij info@inlogregistratietutorialsite.nl. U wordt doorgestuurd naar de homepage.";
		header("refresh: 6; url=index.php?content=homepage");
	}