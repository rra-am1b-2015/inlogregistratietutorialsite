<?php
	session_start();
	echo "<h5>Welkom ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]." | ".$_SESSION["userrole"]."</h5>";
?>