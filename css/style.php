<?php
	session_start();
	header("Content-type: text/css; charset: utf-8");
?>

*
{
	margin:0px;
	padding:0px;
}

body
{
	font-family:Verdana, Arial;
	font-size:14px;
}


#container
{
	border:0px solid green;
	width:60%;
	//margin-top:300px;
	//margin-left:100px;
	margin:20px auto;
	background-color: RGB(255,255,255);
}

#banner, #footer
{
	font-size:25px;
	background-color:RGB(255,127,0);
	color:white;
	text-align:center;
	padding:10px;
	font-weight:bold;
	
}

#banner
{
	border:0px solid green;
	border-top-left-radius:12px;
	border-top-right-radius:12px;
}

#content
{
	background-color: RGB(245,245,245);
	border:1px solid RGB(138, 192, 7);
	color:RGB(24, 24, 24);
	padding:20px;
	margin:15px 0px;
}

#footer
{
	border:0px solid yellow;
	border-bottom-left-radius:12px;
	border-bottom-right-radius:12px;
}

#link
{
	border:1px solid RGBA(138, 192, 7, 1);
	padding:6px;
	border-bottom-left-radius:12px;
	border-bottom-right-radius:12px;
	text-align:center;
}



<?php
 if (isset($_SESSION["id"]))
 {
	echo "#user
		  {
			border:1px solid RGBA(138, 192, 7, 1);
			padding:8px;
			margin-top:15px;
			border-bottom-left-radius:0px;
			border-bottom-right-radius:0px;
			border-top-left-radius:12px;
			border-top-right-radius:12px;
			text-align:left;
			background-color:RGBA(245,245,245, 1);
			color: grey
		  }
		  
		  #userrole_link
		  {
			border:1px solid RGBA(138, 192, 7, 1);
			padding:6px;
			border-bottom-left-radius:12px;
			border-bottom-right-radius:12px;
			text-align:center;
			background-color: rgba(101, 193, 205, 1);
			color: white;
		  }";
 }
?>

#user_img
{
	float:right;
}


#register
{
	border:0px solid yellow;
	width:360px;
	margin:0px auto;
}

#register table, td
{
	border: 0px solid black;
	border-collapse: collapse;
	padding:5px;
}

#register input
{
	padding:5px;
	width:200px;
}

#register input[type=submit]
{
	width:214px;
}

a
{
	text-decoration:none;
	color:orange;
	font-weight: bold;
}

#userrole_link a
{
	text-decoration:none;
	color:rgba(237, 245, 245, 1);
}

a:hover
{
	font-size:13.6px;
}

section
{
	background-color: rgba(240,237, 245,1);
	border: 1px solid black;
}

#top
{	
	background-color: red;
	border: 1px solid black;
	height:60px;
	width: 60px;
	float: left;
}

#middle
{	
	background-color: yellow;
	border: 1px solid black;
	height:60px;
	width: 60px;
	float: left;
}

#bottom
{	
	background-color: blue;
	border: 1px solid black;
	height:60px;
	width: 60px;
	float: left;
}

#ending
{
	border: 1px solid black;
	clear:both;
}