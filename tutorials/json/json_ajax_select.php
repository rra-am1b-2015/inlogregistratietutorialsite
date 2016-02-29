<p><h4>Toepassing JSON string voor select tag</h4></p>

<!-- Wanneer er op het select tag geclickt wordt, haalt het xmlhttp object alle voornamen asychroon
	 dus zonder de pagina te verversen binnen. Deze voornamen zijn te lezen in de select lijst. -->

	<select id="ajax_select" style="width:200px;">
	</select>
<script>



document.getElementById("ajax_select").onmouseover = function(){

	 // Maak een handvat op het select tag	
	 var xmlhttp = new XMLHttpRequest();
 
	 xmlhttp.onreadystatechange = function(){
		 //alert(xmlhttp.readyState + " | " + xmlhttp.status);
		 if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		 {
			 //alert(xmlhttp.responseText);
			 var jsObject = JSON.parse(xmlhttp.responseText);
			 
			 var output = "";
			 for ( var i = 0; i < jsObject.firstname.length; i++)
			 {
				output += "<option>" + jsObject.firstname[i] + " " + jsObject.infix[i] +"</option>";
			 }		 
			 
			 //document.write(output);
			 
			 document.getElementById("ajax_select").innerHTML = output;
			
		 }	 
	 }
	 xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_select.php", true);
	 xmlhttp.send();	 
};

</script>