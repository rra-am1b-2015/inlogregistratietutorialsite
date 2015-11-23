<?php
	if (isset($_SESSION["id"]))
	{
		switch($_SESSION["userrole"])
		{
			case "developer":
				echo "<a href='index.php?content=developer_homepage'>CSS</a> - <a href=''>PHP<a> - <a href=''>JavaScript</a> - <a href=''>JQuery</a> - <a href=''>SASS</a> - <a href=''>LESS</a>";
				break;
			case "administrator":
				echo "verander wachtwoord - verander gebruikersrol";
				break;
			
		}
	}
	
?>