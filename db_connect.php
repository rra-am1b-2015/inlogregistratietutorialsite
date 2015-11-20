<?php
	switch($_SERVER["HTTP_HOST"])
	{
		case "localhost":
			$servername = "localhost";
			$username = "arjanderuijter";
			$password = "geheim";
			$dbname = "am1b_2015_loginregistration";
			break;
		case "rra-am1a-2015.esy.es":
			$servername = "mysql.hostinger.nl";
			$username = "u905009722_adrui";
			$password = "geheim";
			$dbname = "u905009722_am1b";
			break;	
	};
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Er is geen verbinding met de mysql-server gemaakt");
	}
?>