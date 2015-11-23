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
	width:80%;
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
	padding:5px;
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
	border: 0px solid black;
}




section div
{
	margin: 0em 1em 1em 1em;
	width: 200px;
	height: 100px;
	color: white;
	font-size: 1.2em;
	font-weight: bold;
	text-align: center;
	border: 1px solid black;
}

#clearBoth
{
	background-color: rgba(200, 200, 200, 1);
	height:20px;
	width:20%;
	clear:both;
	float:left;
}

#div_1
{	
	background-color: yellow;
	float:left;
	width:20%;
	height:600px;
}

#div_2
{	
	background-color: green;
	float:left;
	width:72%;
	height:400px;
}

#div_3
{	
	background-color: blue;
	float:left;
	clear:left;
	width:50%;
}

#div_4
{	
	background-color: pink;
	float: left;
	width:15%;
	
}

#div_5
{	
	background-color: purple;
	float:left;
	width:23%;

}

#div_6
{	
	background-color: green;
	float:left;
	clear:left;
}

#div_7
{	
	background-color: cyan;
	float: left;
}

#div_8
{	
	background-color: beige;
	float:left;
}

#div_9
{	
	background-color: orange;
	float:left;
}

#div_10
{	
	background-color: yellow;
	float: left;
}

#div_11
{	
	background-color: green;
	float: left;
}

#div_12
{	
	background-color: blue;
	float: left;
}

#div_13
{	
	background-color: pink;
	float:left;
}

#div_14
{	
	background-color: purple;
	float:left;

}

#div_15
{	
	background-color: green;
	float:left;
}

#div_16
{	
	background-color: cyan;
	float: left;
}

#div_17
{	
	background-color: beige;
	float:left;
}

#div_18
{	
	background-color: orange;
	float:left;
}

/*
#end
{
	clear:both;
}
*/

section#end
{
	overflow:hidden;
}

#dev-home-container
{
	border: 0px solid black;
	overflow:hidden;
}


#dev-home-container nav, section
{
	background-color:rgba(200, 200, 200, 1);
	border-radius:6px;
	padding:2%;
	margin: 0.5%;
	padding-bottom: 1000em;
	margin-bottom: -998em;
}

#dev-home-container nav
{
	float:left;
	width:15%;
	color:white;
	
}

#dev-home-container section
{
	float:right;
	width: 75%;
}

#dev-home-container a
{
	color:white;
	//border:1px solid black;
	display:block;
	text-align:right;
	padding:0.3em;
}




