<?php
	$userrole = "developer";
	include("security.php");
	echo "Dev-page";
?>

<div id="dev-home-container">
	<nav>
		<a href='index.php?content=developer_homepage&page=tutorials/css/floats'>floats</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/container-collapse'>container collapse</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/column-collapse'>column collapse</a>
		<a href='index.php?content=developer_homepage&page=tutorials/css/clearfix'>clearfix</a>
		<!--container-collapse
			column-collapse
			clearfix-->
	</nav>
	
	<section>
		<?php
			if (isset($_GET["page"]))
			{
				include($_GET["page"].".php");
			}
			else
			{
				echo "Klik hiernaast op een link voor een tutorial";
			}
		?>	
	</section>
</div> 