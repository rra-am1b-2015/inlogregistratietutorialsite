<h4>JQuery Animation</h4>

<div id="animation_demo">
	Animate Me!
</div>


<script>
	$("document").ready(function(){
		var divCSS = { border			:	"1px solid black",
					   backgroundColor	:	"green",
					   fontSize			:	"1.4em",
					   padding			:	"0.5em",
					   width			:	"100px",
					   height			:	"100px",
					   color			:	"white",
					   position			:	"relative",
					   top				:	"10px",
					   left				:	"0%"};
		
		$("#animation_demo").css(divCSS).animate({left : "500px"}, 2000, function(){
			//alert("Ik ben er!");
		}).animate({top : "40px"}, 2000);;
	});
</script>