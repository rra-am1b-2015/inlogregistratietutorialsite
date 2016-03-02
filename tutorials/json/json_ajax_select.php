<p><h4>Toepassing JSON string voor select tag</h4></p>

<!-- Wanneer er op het select tag geclickt wordt, haalt het xmlhttp object alle voornamen asychroon
	 dus zonder de pagina te verversen binnen. Deze voornamen zijn te lezen in de select lijst. -->

	<select id="ajax_select" style="width:200px;">
	</select>
	
	<p id="showSelection"></p>
	<button id='btn_update' >Opslaan wijziging</button>

	
<script>
	document.getElementById('btn_update').style.visibility = 'hidden';
	
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
				 "<input type='hidden' id='id' value='" + jsObject.id + "'>voornaam: <input type='text' id='firstname' value='" + jsObject.firstname + "'><br>tussenvoegsel: <input type='text' id='infix' value='" + jsObject.infix + "'><br>achternaam: <input type='text' id='lastname' value='" + jsObject.lastname + "'><br>emailadres: <input type='text' id='email' value='" + jsObject.email + "'><br>gebruikersrol: <input type='text' id='userrole' value='" + jsObject.userrole + "'><br>geactiveerd: <input type='text' id='activated' value='" + jsObject.activation + "'>";
				 document.getElementById('btn_update').style.visibility = 'visible';
			 }	 
		}				
		xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_update.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + obj.index);
	 };
	 
	 document.getElementById('btn_update').onclick = function()
	 {
			 var id = document.getElementById('id').value;
			 var firstname = document.getElementById('firstname').value;
			 var infix = document.getElementById('infix').value;
			 var lastname = document.getElementById('lastname').value;
			 var email = document.getElementById('email').value;
			 var userrole = document.getElementById('userrole').value;
			 var activated = document.getElementById('activated').value;
			 
			 
			 xmlhttp.onreadystatechange = function(){
			 
			 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			 {
				 alert(xmlhttp.responseText);
				 //var jsObject = JSON.parse(xmlhttp.responseText);
				 		 
			 }	 
		}				
		xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_update.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("id=" + id + 
					 "&firstname=" + firstname + 
					 "&infix=" + infix + 
					 "&lastname=" + lastname + 
					 "&email=" + email + 
					 "&userrole=" + userrole + 
					 "&activated=" + activated);
		
	 }
	 
	
</script>