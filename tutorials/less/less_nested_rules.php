<h3>Toevoegen van nested rules in style.less</h3><br>
<div id="nestedRule">
	<ul>
		<li><a href="#">hier</a></li>
		<li><a href="#">daar</a></li>
		<li><a href="#">ver weg</a></li>
		<li><a href="#">aan het einde</a></li>	
	</ul>
</div>
<br>

<h4>We hebben in style.less de volgende mixin toegevoegd</h4>

<br><br>
<hr>



<pre>
#nestedRule
{
	a
	{
		text-align: left;
		text-decoration:none;
		&:hover
		{
			color: red;
		}		
	}
	
	li
	{
		list-style-type: none;
		&:last-child
		{
			background-color: yellow;
		}
	}
}
</pre>
<hr>
