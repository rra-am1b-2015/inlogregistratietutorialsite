<?php
	include("../../db_connect.php");
	
	switch ( $_POST["action"])
	{
		case "show":
			//Maak de query
			$query = "SELECT * FROM `userrole`";
			$result = mysqli_query($conn, $query);
			
			//Zet de teller op 1
			$teller = 1;
			
			// Tel het aantal rijen dat uit de database is opgevraagd
			$max = mysqli_num_rows($result);
			
			$output = "";
			$output .= '{ "userroles" : [';
			while ( $record = mysqli_fetch_assoc($result))
			{
				//echo $record["id"]. " | " . $record["role"];
				$output .= json_encode($record);
				if ( $teller < $max )
				{
					$output .= ", ";
					$teller++;
				}
			}
			$output .= "] }";
			echo $output;
		break;
		case "create":
			$query = "INSERT INTO `userrole` (`id`,
									  `role`)
					 VALUES			 (NULL,
									  '".$_POST["userrole"]."')";
									  
			mysqli_query($conn, $query);
		break;
		default:		
	}
	
						



?>