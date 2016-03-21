<h3>Pattern matching met LESS</h3><br>
<p>
<h4>We gaan de CSS opmaak laten afhangen van een variabele</h4>
<p id="patMatch">Deze paragraaf krijgt zijn opmaak op basis van pattern matching</p>
<br><br>
<hr>
<pre>
// pattern matching met LESS

@state: slow;					// normal 80% 20%, busy 60% 80%, slow 5% 80%
@backgroundColorPercentage: 5%;
@textColorPercentage: 80%;


.customPatMatch(normal, @percentageBckgrClr, @txtColorPercentage)
{
	background-color: darken(@siteGreyColor, @percentageBckgrClr);
	color: lighten(@siteGreyColor, @txtColorPercentage);
	
}
.customPatMatch(busy, @percentageBckgrClr, @txtColorPercentage)
{
	background-color: lighten(@siteGreyColor, @percentageBckgrClr);
	color: darken(@siteGreyColor, @txtColorPercentage);
	
}
.customPatMatch(slow, @percentageBckgrClr, @txtColorPercentage)
{
	background-color: darken(@siteGreyColor, @percentageBckgrClr);
	color: darken(@siteGreyColor, @txtColorPercentage);
}
.customPatMatch(@_, @_, @_)
{
	border-style: solid;
	border-width: 5px;
	border-color: @userrolelinkColor;
	.roundedCornersProps(10px, 10px, 10px, 10px);
	padding: 1em;
	margin: 1em 1em 1em 0em;
}

#patMatch
{
	.customPatMatch(@state, @backgroundColorPercentage, @textColorPercentage);
}


</pre>
<hr>
<br>
<p>
<h4>Verwijzing</h4>
</p>
<br><br>
<hr>
<pre>

</pre>
<hr>
<br>