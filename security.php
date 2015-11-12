<?php
	session_start();
	if ( !isset($_SESSION["id"]))
	{
		echo "Niet ingelogd";
		header("refresh:4;url=index.php?content=login_form");
		exit();		
	}
	else if ( $userrole != $_SESSION["userrole"] )
	{
		echo "Uw gebruikerrol (".$_SESSION["userrole"].") komt niet overeen met de gebruikersrol die nodig is voor het bekijken van deze pagina (".$userrole."). U wordt doorgestuurd naar de ".$_SESSION["userrole"]." homepage";
		header("refresh:4;url=index.php?content=".$_SESSION["userrole"]."_homepage");
		exit();		
	}
	else
	{
		echo "<h5>Welkom ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]." | ".$_SESSION["userrole"]."</h5>";
	}	
?>