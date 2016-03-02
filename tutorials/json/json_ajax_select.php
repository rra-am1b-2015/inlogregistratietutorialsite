<p><h4>Toepassing JSON string voor select tag</h4></p>

<!-- Wanneer er op het select tag geclickt wordt, haalt het xmlhttp object alle voornamen asychroon
	 dus zonder de pagina te verversen binnen. Deze voornamen zijn te lezen in de select lijst. -->

	<select id="ajax_select" style="width:200px;">
	</select>
	
	<p id="showSelection"></p>
<script>

	var xmlhttp = new XMLHttpRequest();

	document.getElementById("ajax_select").onmouseover = function(){	 
 
	 xmlhttp.onreadystatechange = function(){
		 //alert(xmlhttp.readyState + " | " + xmlhttp.status);
		 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			 //alert(xmlhttp.responseText);
			 var jsObject = JSON.parse(xmlhttp.responseText);
			 
			 var output = "<option>--kies een user--</option>";
			 for ( var i = 0; i < jsObject.firstname.length; i++)
			 {
				output += "<option value=" + jsObject.id[i] + ">" + jsObject.firstname[i] + 
								 " " + jsObject.infix[i] +
								 " " + jsObject.lastname[i] +"</option>";
			 }		 
			 
			 //document.write(output);
			 
			 document.getElementById("ajax_select").innerHTML = output;
			 
			 
		 }	 
	 }
		 xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_select.php", true);
		 xmlhttp.send();
	};

	document.getElementById("ajax_select").onchange = function(){
		
		 var selectTag = document.getElementById("ajax_select");
		 var obj = selectTag.options[selectTag.selectedIndex];
		 
		 document.getElementById("showSelection").innerHTML = 
				"<input type='text' value='" + obj.text + "' />";
			
		xmlhttp.onreadystatechange = function(){
			 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			 {
				 //alert(xmlhttp.responseText);
				 var jsObject = JSON.parse(xmlhttp.responseText);
				 document.getElementById("showSelection").innerHTML = 
				 "voornaam: <input type='text' value='" + jsObject.firstname + "'><br>tussenvoegsel: <input type='text' value='" + jsObject.infix + "'><br>achternaam: <input type='text' value='" + jsObject.lastname + "'><br>emailadres: <input type='text' value='" + jsObject.email + "'><br>gebruikersrol: <input type='text' value='" + jsObject.userrole + "'><br>geactiveerd: <input type='text' value='" + jsObject.activation + "'>";			 
			 }	 
		}				
		xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_update.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + obj.index);
	 };
	
</script>