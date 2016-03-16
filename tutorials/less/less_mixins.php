<h3>Toevoegen van Mixins in less-style.less</h3><br>
<p>
<h4>We hebben in less-style.less de volgende mixin toegevoegd</h4>
</p>
<br><br>
<hr>
<pre>
.commonSettingsHeaderFooter
{
	font-size:25px;
	background-color: @footBanBackgroundColor; //RGB(255,127,0);
	border: 1px solid darken(@footBanBackgroundColor, 30%);
	color:white;
	text-align:center;
	padding:10px;
	font-weight:bold;
}
</pre>
<hr>
<br>
<p>
<h4>In het bestand style.less verwijzen we naar deze mixin</h4>
</p>
<br><br>
<hr>
<pre>
#banner
{
	border-top-left-radius: @roundedCorners;
	border-top-right-radius: @roundedCorners;
	.commonSettingsHeaderFooter
}

#footer
{
	border-bottom-left-radius: @roundedCorners;
	border-bottom-right-radius: @roundedCorners;
	.commonSettingsHeaderFooter
}
</pre>
<hr>
<br>