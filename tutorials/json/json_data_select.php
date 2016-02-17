<?php
	include("../../db_connect.php");
	$query = "SELECT `firstname` FROM `users`";	
	$result = mysqli_query($conn, $query);	
	
	$numberOfFirstnames = mysqli_num_rows($result);

	$counter = 1;
	$output = '{ "firstname" : [ ';
	while ( $record = mysqli_fetch_assoc($result))
	{
		if ($counter < $numberOfFirstnames)
		{
			$output .= "\"".$record["firstname"]."\", ";
		}
		else
		{
			$output .= "\"".$record["firstname"]."\"";
		}
		$counter++;
	}
	$output .= ']}';
	
	echo $output;
?>
