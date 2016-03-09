<h3>Het invoegen van een record in de database met Ajax (CREATE)</h3>

<select id='slct_userrole' style="width:200px;"></select><br>
<br><hr><br>

Vul een nieuwe gebruikersrol in: <input type="text" id="invoer"><br>
<button id="btn_create">Sla Op!</button>


<script>
var xmlhttp = new XMLHttpRequest();

document.getElementById("slct_userrole").onmouseover = function()
{
	xmlhttp.onreadystatechange = function()
	{
		
		if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{			
			//alert(xmlhttp.responseText);
			console.log(xmlhttp.responseText);
			var result = JSON.parse(xmlhttp.responseText);
			var output = "";
			for ( var i = 0; i < result.userroles.length; i++)
			{
				output += "<option>" + result.userroles[i].role + "</option>";			
			}
			document.getElementById("slct_userrole").innerHTML = output;
		}		
		
	}
		
	xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_create.php", true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("action=show");
}

document.getElementById("btn_create").onclick = function()
{
	var invoer = document.getElementById("invoer").value;
	if (invoer != "")
	{		
		xmlhttp.onreadystatechange = function()
		{
			
			if ( xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{			
				alert(invoer + "is opgeslagen");
			}		
		}
		
		xmlhttp.open("post", "http://localhost/am1b/inlogregistratietutorialsite-master/tutorials/json/json_data_create.php", true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlhttp.send("action=create&userrole=" + invoer);
	}
}
</script>