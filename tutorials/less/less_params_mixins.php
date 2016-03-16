<h3>Toevoegen van Mixins met parameters in less-style.less</h3><br>
<p>
<h4>We hebben in less-style.less de volgende mixin toegevoegd</h4>
</p>
<br><br>
<hr>
<pre>
// mixin met parameters
.roundedCornersProps (@topLeft, @topRight, @bottomLeft, @bottomRight)
{
	border-bottom-left-radius: @bottomLeft;
	border-bottom-right-radius: @bottomRight;
	border-top-left-radius: @topLeft;
	border-top-right-radius: @topRight;
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
	.roundedCornersProps (@roundedCorners, @roundedCorners, 0px, 0px);
	.commonSettingsHeaderFooter
}

#footer
{
	.roundedCornersProps (0px, 0px, @roundedCorners, @roundedCorners);
	.commonSettingsHeaderFooter
}
</pre>
<hr>
<br>