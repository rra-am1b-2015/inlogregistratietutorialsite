<?php
	session_unset("userrole");
	session_destroy();
	header("location:index.php?content=homepage");	
?>