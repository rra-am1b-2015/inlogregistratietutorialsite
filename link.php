<a href="index.php?content=homepage">start</a>
<?php
	if (isset($_SESSION["id"]))
	{
		echo "<a href='index.php?content=".$_SESSION["userrole"]."_homepage'>home</a> ";
		echo "<a href='index.php?content=logout'>uitloggen</a> ";
		switch ( $_SESSION["userrole"] )
		{
			case "developer":
				echo "<a href='index.php?content=developers/php/start'>PHP</a>";
				break;
			default:
				break;		
		}
	}
	else
	{
		echo "<a href='index.php?content=register_form'>registreer</a> ";
		echo "<a href='index.php?content=login_form'>inloggen</a> ";
		
	}
?>