<?php
	// Ga kijken of het record met $_GET["id"] en $_GET["pw"] bestaat. Zo ja, activeer het account en biedt de mogelijkheid aan om het password te wijzigen. Zo nee, meldt dan dat de gebruiker geen rechten heeft op deze pagina. stuur hem door naar de startpagina.	
	
	if ( isset($_POST["submit"]))
	{
		//echo "Er is gedrukt op de submitknop<br><br>";
		//$wachtwoord = "K";
		//echo MD5("j");
		//echo "<br><br>";
		//var_dump($_POST);
		$result = strcmp($_POST["password"], $_POST["check_password"]);
		//var_dump($result);
		if ($result == 0)
		{
			// Update het passwordveld met het correcte password. Stuur daarna door naar login_form.php
			include("db_connect.php");
			
			$query = "UPDATE `users`
					  SET		`password`	= '".MD5($_POST["password"])."'
					  WHERE		`id`		= '".$_POST["id"]."'";
					  
			$result = mysqli_query($conn, $query);
			
			if ($result)
			{
				echo "U wachtwoord is succesvol gewijzigd. U wordt doorgestuurd naar de inlogpagina";
				header("refresh:6;url=index.php?content=login_form&email=".$_POST["email"]);
			}
			else
			{
				echo "Er is een probleem opgetreden met het opnieuw instellen van uw wachtwoord. Neem contact op met de systeembeheerder via info@inlogregistratiesysteemtutorialsite.nl";
				header("refresh:5; url=index.php?content=homepage");
			}
		}
		else
		{
			// U ingevoerde wachtwoorden verschillen van elkaar, probeer het opnieuw. Redirect naar activation.php met id als GET - var
			echo "U ingevoerde wachtwoorden komen niet overeen. Probeer nogmaals uw wachtwoord tweemaal in te voeren";
			header("refresh:3; url=index.php?content=activation&id=".$_POST["id"]."&pw=".$_POST["pw"]);
		}		
	}
	else
	{

		//echo "Ik ga jou activeren...je id = ".$_GET["id"];
		include("db_connect.php");

		$query = "SELECT		*
				  FROM			`users`
				  WHERE			`id`		= '".$_GET["id"]."'
				  AND			`password`	= '".$_GET["pw"]."'";

		//echo $query; exit();
		
		$result = mysqli_query($conn, $query);
		
		if ( mysqli_num_rows($result)> 0 )
		{
			$record = mysqli_fetch_assoc($result);
			$email = $record["email"];
			
			$query = "UPDATE 	`users` 
					  SET 		`activation` = 'true'
					  WHERE 	`id` = ".$_GET["id"].";";
				  
			$result = mysqli_query($conn, $query);
		
		
			if ($result)
			{
				// Stel de gebruiker op de hoogte dat het activeren is gelukt. Stuur door naar login_form.php
				echo "<h3>Het activeren van uw account is succesvol verlopen. Kies een wachtwoord van minimaal 8 tekens.</h3><hr><br>";
			
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
							<td>
								<input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
								<input type="hidden" name="pw" value="<?php echo $_GET["pw"]; ?>">
								<input type="hidden" name="email" value="<?php echo $email; ?>">
							</td>
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
		else
		{
			echo "U heeft geen rechten op deze pagina. U wordt doorgestuurd naar de startpagina";
			header("refresh:5; url=index.php?content=homepage");
		}
	}
	//var_dump($result);
?>