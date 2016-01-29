<script>
	//alert("Halo");
	document.cookie = "voornaam=Arjan;";
	document.cookie = " tussenvoegsel=de;";
	document.cookie = "achternaam=Ruijter;";
	var cookieText = document.cookie;
	var cookieArray = document.cookie.split(";");
	console.log("Het aantal array elementen is: " + cookieArray.length);
	for ( var i=0; i < cookieArray.length; i++)
	{
		console.log(cookieArray[i]);
		console.log(cookieArray[i].substring(1));
	}
	
	console.log(cookieText);
</script>