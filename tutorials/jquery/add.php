<h4>Toevoegen van nieuwe tekst aan bestaande tekst</h4>

<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>Volkswagen</li>
	<li>Ford</li>
</ul>

<button id="append-prepend">Toevoegen extra tekst</button>
<button id="after">Voeg extra &lt;li&gt; toe na laatste element</button>
<button id="before">Voeg extra &lt;li&gt; toe voor eerste element</button>


<script>
	$(document).ready(function(){
		$("#append-prepend").click(function(){
			var auto = $("li").first();
			auto.append(" mijn favoriete automerk");
			auto.prepend("Als ik echt moet kiezen is ");

			var listItems = $("li");
			for ( var i =0; i < listItems.length; i++)
			{
				if ( listItems.eq(i).text() == "Ford")
				{
					listItems.eq(i).append(", is het beste automerk");
				}
			}
		});
		
		$("#after").click(function(){
			var allListItems = $("li");
			var lastListItem = allListItems.last();
			lastListItem.after("<li>Bentley Silver Shadow</li>");		
		});
		
		$("#before").click(function(){
			if ($("li").first().text() != "Daihutsu Core Sport Edition")
			{
				$("li").first().before("<li>Daihutsu Core Sport Edition</li>");
			}
		});
	});
</script>


