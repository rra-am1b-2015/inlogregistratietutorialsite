<?php
	$userrole = "developer";
	include("security.php");
	echo "Dev-page";
?>

<div id="dev-home-container">
	<nav>
		<?php
			if (isset($_GET["topic"]))
			{
				$topic = $_GET["topic"];
			}
			else
			{
				$topic = "css";
			}
			switch ($topic)
			{
				case "css":
				?>
					<a href='index.php?content=developer_homepage&topic=css&page=tutorials/css/floats'>floats</a>
					<a href='index.php?content=developer_homepage&topic=css&page=tutorials/css/container-collapse'>container collapse</a>
					<a href='index.php?content=developer_homepage&topic=css&page=tutorials/css/column-collapse'>column collapse</a>
					<a href='index.php?content=developer_homepage&topic=css&page=tutorials/css/clearfix'>clearfix</a>
					<!--container-collapse
						column-collapse
						clearfix-->
		<?php
				break;
				case "php":
				?>
					<a href='index.php?content=developer_homepage&topic=php&page=tutorials/css/floats'>variables</a>
					<a href='index.php?content=developer_homepage&topic=php&page=tutorials/css/container-collapse'>switch case</a>
					<a href='index.php?content=developer_homepage&topic=php&page=tutorials/css/column-collapse'>if elsif else</a>
		<?php
			}
		?>
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