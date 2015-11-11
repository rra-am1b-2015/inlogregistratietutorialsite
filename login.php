<?php
	//var_dump($_POST);	
	// Contact maken met de server
	include("db_connect.php");
	
	// Select query of bekend in database
	$query = "SELECT	*
			  FROM		`users`
			  WHERE		`email`		= '".$_POST["email"]."'
			  AND		`password`	= '".MD5($_POST["password"])."'";
			  
	//echo $query; exit();
	
	$result = mysqli_query($conn, $query);
	
	$record = mysqli_fetch_assoc($result);
	
	if ( mysqli_num_rows($result) > 0)
	{	
		//var_dump($record);
		header("location:index.php?content=developer_homepage");
		
	}
	else
	{
		echo "De door u gegeven combinatie van emailadres en wachtwoord is niet bij ons bekend. U wordt doorgestuurd naar de inlogpagina";
		header("refresh:4;url=index.php?content=login_form");
	}
	
	//Zo ja doorsturen naar homepage
	
	// Zo nee doorsturen na melding naar login_form
?>