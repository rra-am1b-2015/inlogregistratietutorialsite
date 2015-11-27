<?php
	$userrole = "developer";
	include("security.php");
	echo "<h3>Dit is de developer homepage</h3>";
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
					include("topic_links/css_link.php");
				break;
				case "php":
					include("topic_links/php_links.php");
				break;
				case "javascript":
					include("topic_links/javascript_links.php");
				break;
				case "jquery":
					include("topic_links/jquery_links.php");
				break;
				case "sass":
					include("topic_links/sass_links.php");
				break;
				case "less":
					include("topic_links/less_links.php");
				break;
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