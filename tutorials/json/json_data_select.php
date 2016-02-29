<?php
	include("../../db_connect.php");
	$query = "SELECT `firstname`, `infix` FROM `users`";	
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
	$output .= '], "infix" : [';
	$counter = 1;
	mysqli_data_seek($result, 0);
	while ( $record = mysqli_fetch_assoc($result))
	{
		
		if ($counter < $numberOfFirstnames)
		{
			$output .= "\"".$record["infix"]."\", ";
		}
		else
		{
			$output .= "\"".$record["infix"]."\"";
		}
		$counter++;
	}
	$output .= ']}';
	
	
	echo $output;
?>
