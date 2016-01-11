<table id="table">
	<tr>
		<th>id</th>
		<th>voornaam</th>
		<th>tussenvoegsel</th>
		<th>achternaam</th>	
	</tr>
	<tr>
		<td>1</td>
		<td>Arjan</td>
		<td>de</td>
		<td>Ruijter</td>
		
	</tr>
	<tr>
		<td>2</td>
		<td>Fred</td>
		<td>de</td>
		<td>Beer</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Johnny</td>
		<td>van</td>
		<td>Leersum</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Bert</td>
		<td>van</td>
		<td>Leeghwater</td>
	</tr>
</table>

<button id="opmaak">Geef alle even rijen een opmaak</button>


<script>
	$("document").ready(function(){
		$("#opmaak").click(function(){
			$("tr:even:not()").addClass("even");
			$("tr:odd").addClass("odd");
		});
		
	});
</script>