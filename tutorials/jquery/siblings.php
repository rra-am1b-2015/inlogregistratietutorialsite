<h4>JQuery Siblings</p>

<div>
	<ul id="tel">
		<li>een</li>
		<li>twee</li>
		<li>drie</li>
		<li>vier</li>
		<li>vijf</li>	
	</ul>
	
<hr>

	<ul id="alpha">
		<li>a</li>
		<li>b</li>
		<li>c</li>		
	</ul>
</div>

<p>Klik op de button om de siblings van de ul-tag met id="tel" te selecteren</p>

<button id="btn_siblings">Klik hier</button>

<p>Klik op mij en de letters binnen de listitems worden steeds groter</p>
<button id="btn_enlarge">Klik hier!</button>



<script>
	$("document").ready(function(){
		$("ul").css("list-style-type", "none");
	
		$("#btn_siblings").click(function(){
			$("li").siblings().css({ border 		 : "2px solid grey", 
									 backgroundColor : "orange",
									 width 			 : "150px"});
		});
		
		var liObj = $("#tel li:first");
		var tekstGrootte = parseFloat(liObj.css("font-size"));
		$("#btn_enlarge").click(function(){
			console.log(tekstGrootte);
			tekstGrootte += 20;
			liObj.css("font-size", tekstGrootte + "px");
			liObj = liObj.next();
		});
		
		
	});
</script>
