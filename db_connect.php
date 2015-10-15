<?php
	$servername = "localhost";
	$username = "arjanderuijter";
	$password = "geheim";
	$dbname = "am1b_2015_loginregistration";	
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	if (!$conn)
	{
		die("Er is geen verbinding met de mysql-server gemaakt");
	}
?>