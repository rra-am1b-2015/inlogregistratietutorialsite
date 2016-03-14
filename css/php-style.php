<?php
 session_start();
 header("Content-type: text/css; charset: utf-8");

 if (isset($_SESSION["id"]))
 {
	include("./php-style-inc.css");
 }
?>