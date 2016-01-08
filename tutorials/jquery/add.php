<h4>Toevoegen van nieuwe tekst aan bestaande tekst</h4>

<ul>
	<li>Mercedes</li>
	<li>Fiat</li>
	<li>Volkswagen</li>
	<li>Ford</li>
</ul>

<button>Toevoegen extra tekst</button>
<button id="after">Toevoegen extra tekst</button>

<script>
	$(document).ready(function(){
		$("button").click(function(){
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
		
		
	});
</script>


