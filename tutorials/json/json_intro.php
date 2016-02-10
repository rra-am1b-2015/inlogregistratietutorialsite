<p><h4>Mijn eerste JSON string</h4></p>

<p id="nameFromJSON">Hier komt mijn naam te staan</p>

<button id="btn_JSON" class="button">Geef volledige naam weer</button>

<script>



/* 1) JSON is een string
 * 2) Een JSON string heeft <naam> : <waarde> paren gescheiden door een dubbele punt.
 * 3) De <naam> moet door dubbele quotes omgeven worden. De <waarde> hoeft dat niet.
 * 4) Je mag in de JSON string geen enter opnemen.
 */

var jsonTextString = '{ "firstname" : "Arjan", "infix" : "de", "lastname" : "Ruijter", "leeftijd" : 47, "favorieteKleuren" : [ "geel", "groen", "blauw" ] }';

var jsObject = JSON.parse(jsonTextString);

console.log(jsObject.firstname);

var txtName = "Mijn naam is: " + jsObject.firstname + " " + jsObject.infix +  " " + jsObject.lastname + "<br>" +
			  "Mijn leeftijd is: " + jsObject.leeftijd + "<br>";
	txtName += "Mijn favoriete kleuren zijn:<br>" 
	for ( var i = 0; i < jsObject.favorieteKleuren.length; i++)
	{
		txtName += jsObject.favorieteKleuren[i] + "<br>";
	}

document.getElementById("nameFromJSON").innerHTML = txtName;




</script>