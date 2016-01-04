<h4>JQuery Get & Set</h4>
<p>Deze tekst wordt <b>gewijzigd</b> wanneer je op de onderstaande knop drukt</p>
<button id="veranderTekst">Verander tekst</button>

<br><br>
<form action="" method="post">
	voornaam: <input type="text" name="firstname"><br>
	leeftijd: <input type="number" name="age"><br>
	<input type="submit" value="druk op mij!">
</form>

<script>
	$(document).ready(function(){
		var tekst = $("p").text();
		//alert(tekst);
		console.log(tekst);
		var btn_tekst = $("button").text();
		//alert(btn_tekst);
		console.log(btn_tekst);
		
		$("#veranderTekst").click(function(){
			//alert("Hallo");
			$("p").html("Dit is wat nieuwe tekst <b>die</b> de vorige tekst heeft vervangen");		
		});
		
		var htmlTekst = $("p").html();
		//alert(htmlTekst);
		$("p").html("Dit is wat gewijzigde tekst met <i>html markup</i>");
		console.log(htmlTekst);
		
		$("[type=submit]").click(function(){
			alert("Hallo!");
			var getal = $("[type=number]").val();
			alert(getal);
		});
		
		
		
		
		
	});
	
</script>