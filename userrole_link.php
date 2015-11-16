<?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "PHP - CSS - JavaScript - JQuery - SASS - LESS";
				break;
			case "administrator":
				echo "verander wachtwoord - verander gebruikersrol";
				break;
			
		}
	}
	
?>