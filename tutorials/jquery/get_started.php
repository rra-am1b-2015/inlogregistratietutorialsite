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
<button class="btn_3">Verander float instelling naar right voor de eerste paragraaf</button>
<button class="btn_4">Verander float instelling naar right voor de laatste paragraaf</button>
<button class="btn_4"><input id="nr" type="number"></input></button>


<script>
	
	
	$(document).ready(function()
	{
		//alert("Het werkt!");
		$("#btn_1").click(function()
		{
			$("p").hide();
			$(this).text("Dubbelklik op mij!");			
		});
		
		// Maak een selector voor btn_1. Bij dblclick() (dubbelklikken) moeten de p tags weer  verschijnen
		// show()
		
		$("#btn_1").dblclick(function()
		{
			//alert("Hallo");
			$("p").show();
			$(this).text("Klik op mij!");			
		});

		$("#btn_2").click(function(){
			$("p:odd").text("Dit is een even paragraaf!");
			$("p:odd").css("background-color", "red")
					  .css("border", "10px dashed yellow");
			$(this).html("Ik heb de even paragrafen verandert");
			
		});			
		$("#btn_2").dblclick(function()
		{
			$("p:odd").css("background-color", "rgb(245,245,245)");
			$("p:odd").css("border", "0px solid grey");
			$(this).html("Verander de tekst van de even paragrafen!");
		
		});

		$(".btn_3").click(function()
		{
			$("p:first").css("float", "right");
		});
		$(".btn_3").dblclick(function()
		{
			$("p:first").css("float", "none");
		});
		
		$(".btn_4").click(function()
		{
			$("p:last").css("float", "right");
		});
		$(".btn_4").dblclick(function()
		{
			$("p:last").css("float", "none");
		});
		
		$(".btn_5").click(function()
		{
			$("p:last").css("float", "right");
		});
		$(".btn_5").dblclick(function()
		{
			$("p:last").css("float", "none");
		});
		
	});

</script>