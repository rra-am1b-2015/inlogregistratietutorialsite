<h5>JQuery Getting Started</h5>

<p>Dit is de eerste paragraaf</p>
<p>Dit is de tweede paragraaf</p>
<p>Dit is de derde paragraaf</p>
<p>Dit is de vierde paragraaf</p>
<p>Dit is de vijfde paragraaf</p>
<p>Dit is de zesde paragraaf</p>
<p>Dit is de zevende paragraaf</p>
<p>Dit is de achtste paragraaf</p>
<p>Dit is de negende paragraaf</p>
<p>Dit is de tiende paragraaf</p>
<button id="btn_1">Klik op mij en alles verdwijnt!</button>
<button id="btn_2">Verander de tekst van de even paragrafen</button>


<script>
	
	$(document).ready(function()
	{
		//alert("Het werkt!");
		$("#btn_1").click(function()
		{
			$("p").hide();
			$(this).text("Ik zei het toch, alles is verdwenen!");
			
		});

		$("#btn_2").click(function(){
			$("p:odd").text("Dit is een even paragraaf!");
			$("p:odd").css("background-color", "red").css("border", "10px dashed yellow");
			$(this).html("Ik heb de even paragrafen verandert");
			
		});

		
	});

</script>