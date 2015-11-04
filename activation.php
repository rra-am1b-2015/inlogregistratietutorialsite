<?php
	if ( isset($_POST["submit"]))
	{
		echo "Er is gedrukt op de submitknop";
	}
	else
	{

		//echo "Ik ga jou activeren...je id = ".$_GET["id"];
		include("db_connect.php");
		
		$query = "UPDATE 	`users` 
				  SET 		`activation` = 'true'
				  WHERE 	`id` = ".$_GET["id"].";";
				  
		$result = mysqli_query($conn, $query);
		
		
		if ($result)
		{
			// Stel de gebruiker op de hoogte dat het activeren is gelukt. Stuur door naar login_form.php
			echo "<h3>Het activeren van uw account is succesvol verlopen. Kies een wachtwoord van minimaal 8 tekens.</h3><hr><br>";
			//header("refresh:4;url=index.php?content=login_form");
	?>
			<form id="register" action="index.php?content=activation" method="post">
				<table>				
					<tr>
						<td>kies een wachtwoord</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td>type nogmaal uw wachtwoord: </td>
						<td><input type="password" name="check_password"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"></td>
						<td><input type="submit" name="submit"></td>
					</tr>
				</table>
			</form>
	<?php
		}
		else
		{
			// Vertel de gebruiker dat hij contact moet opnemen met systeembeheer via inf@inlogregistratietutorialsite.nl.
			// Stuur de gebruiker door naar de homepage header(refresh)
			echo "Uw account is helaas niet geactiveerd. Neem contact op met uw systeembeheerder. U wordt doorgestuurd naar de startpagina.";
			header("refresh:4;url=index.php?content=homepage");
		}
	}
	//var_dump($result);
?>