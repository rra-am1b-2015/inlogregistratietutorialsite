<?php
	echo "Ik ga jou activeren...je id = ".$_GET["id"];
	include("db_connect.php");
	
	$query = "UPDATE 	`users` 
			  SET 		`activation` = 'true'
			  WHERE 	`id` = ".$_GET["id"].";";
			  
	$result = mysqli_query($conn, $query);
	
	var_dump($result);
?>