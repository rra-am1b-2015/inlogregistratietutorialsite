<?php
	include("../../db_connect.php");
	
	if ( count($_POST) == 1 )
	{
		$query = "SELECT * FROM `users` WHERE `id` = '".$_POST["id"]."'";	
		$result = mysqli_query($conn, $query);	
		
		$record = mysqli_fetch_assoc($result);
		

		
		echo '{"id" : "'.$record["id"].'", '.
			   '"firstname" : "'.$record["firstname"].'", '.
			   '"infix" : "'.$record["infix"].'", '.
			   '"lastname" : "'.$record["lastname"].'", '.
			   '"email" : "'.$record["email"].'", '.
			   '"activation" : "'.$record["activation"].'", '.
			   '"userrole" : "'.$record["userrole"].'"}';
	}
	else
	{
		
		$query = "UPDATE `users`
				  SET `firstname` = '".$_POST["firstname"]."',
					  `infix` = '".$_POST["infix"]."',
					  `lastname` = '".$_POST["lastname"]."',
					  `activation` = '".$_POST["activated"]."',
					  `userrole` = '".$_POST["userrole"]."',
					  `email` = '".$_POST["email"]."'
					  WHERE `id` = ".$_POST["id"].";";
				  
		$result = mysqli_query($conn, $query);
		
		echo "De update heeft plaatsgevonden!";
		
	}
?>
