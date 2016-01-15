<h4>JQuery Descendents</p>

<div>
	<ul>
		<li>een</li>
		<li>twee</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
	
<hr>

	<ul>
		<li>a</li>
		<li>b</li>
		<li>c</li>		
	</ul>
</div>

<p>Klik op de button om de childtags van de div te selecteren</p>

<button id="btn_descendent">Klik hier</button>

<script>
	$("document").ready(function(){
		$("ul").css("list-style-type", "none");
	
		$("#btn_descendent").click(function(){
			$("ul").children("li:odd").css({ border 		 : "2px solid grey", 
											 backgroundColor : "orange",
											 width 			 : "150px"});
		});
		
		
		$()
	});
</script>
