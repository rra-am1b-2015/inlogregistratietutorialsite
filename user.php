<?php
	if (isset($_SESSION["id"]))
	{
		echo "<h5>Welkom ".$_SESSION["firstname"]." ".$_SESSION["infix"]." ".$_SESSION["lastname"]." <div  id='user_img'><img src='images/user.png' alt='user'> ".$_SESSION["userrole"]."</div></h5>";
	}
?>