<p><h4>Toepassing JSON string voor select tag</h4></p>

<!-- Wanneer er op het select tag geclickt wordt, haalt het xmlhttp object alle voornamen asychroon
	dus zonder de pagina te verversen binnen. Deze voornamen zijn te lezen in de select lijst. -->

<select id="ajax_select">
	<option>-- voornamen --</option>
	<option>Arjan</option>
	<option>Frans</option>
	<option>Bert</option>
</select>
<script>



document.getElementById("btn_JSON").onchange = function(){
	// Maak een handvat op het select tag
	 var xmlhttp = new XMLHttpRequest();
 
	 xmlhttp.onreadystatechange = function(){
		 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			 var jsObject = JSON.parse(xmlhttp.responseText);

		     var txtName = "Mijn naam is: " + jsObject.firstname + " " + jsObject.infix +  " " + jsObject.lastname + "<br>" +
						   "Mijn leeftijd is: " + jsObject.leeftijd + "<br>";
			 txtName += "Mijn favoriete kleuren zijn:<br>" 
			 for ( var i = 0; i < jsObject.favorieteKleuren.length; i++)
			 {
				txtName += jsObject.favorieteKleuren[i] + "<br>";
			 }
			 txtName += "Mijn leerlingnummer is: " + jsObject.opleiding.llnr + "<br>";
			 txtName += "De naam van mijn opleiding is: " + jsObject.opleiding.naamOpleiding;

			 document.getElementById("nameFromJSON").innerHTML = txtName;			 
		 }	 
	 }
	 xmlhttp.open("POST", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data.php", true);
	 xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	 xmlhttp.send("id=4");
	 
};

</script>