<?php
	include("../../db_connect.php");
	
	if ( count($_POST) == 1 )
	{
	$query = "SELECT * FROM `users` WHERE `id` = '".$_POST["id"]."'";	
	$result = mysqli_query($conn, $query);	
	
	$record = mysqli_fetch_assoc($result);
	

	
	echo '{"firstname" : "'.$record["firstname"].'", '.
		  '"infix" : "'.$record["infix"].'", '.
		  '"lastname" : "'.$record["lastname"].'", '.
		  '"email" : "'.$record["email"].'", '.
		  '"activation" : "'.$record["activation"].'", '.
		  '"userrole" : "'.$record["userrole"].'"}';
	}
	else
	{
		echo "Hallo";
	}
?>
