<h3>Guarded Mixins met LESS</h3><br>
<p>
<h4>De opmaak van deze onderstaande paragraaf hangt af van een guarded mixin</h4>
<p id="guardedMixin">Deze paragraaf krijgt zijn opmaak op basis van een guarded mixin</p>
<br><br>
<hr>
<pre>
// Guarded mixin met LESS
@test: 5;

.guardedMixin(@backgroundGuardedMixinColor) when (isnumber(@test)) and ( @test < 10)
{
	background-color: lighten(@backgroundGuardedMixinColor, 20%);
	color: lighten(@siteGreyColor, 20%);
	font-size: 3em;
}
.guardedMixin(@backgroundGuardedMixinColor) when (isnumber(@test)) and ( @test >= 10 )
{
	background-color: darken(@backgroundGuardedMixinColor, 10%);
	color: lighten(@siteGreyColor, 80%);
	font-size: 1em;
}
.guardedMixin(@_)
{
	border: 3px solid darken(@siteGreyColor, 80%);
	border-radius: 0.5em;
	margin: 1em 1em 1em 0em;
	padding: 1em;
	//color: darken(@siteGreyColor, 80%);
}

#guardedMixin
{
	.guardedMixin(@footBanBackgroundColor + #111);
}





</pre>
<hr>
