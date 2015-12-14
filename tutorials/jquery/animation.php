<h4>JQuery Animation</h4>

<div id="animation_demo">
	Animate Me!
</div>

<button id="btn_animate">Start Animatie!</button>


<script>
	$("document").ready(function(){
		var divCSS = { border			:	"1px solid black",
					   backgroundColor	:	"green",
					   border			:	"10px solid orange",
					   fontSize			:	"1.4em",
					   padding			:	"0.5em",
					   width			:	"100px",
					   height			:	"100px",
					   color			:	"white",
					   position			:	"relative",
					   top				:	"10px",
					   left				:	"0%"};
		var animationTime = 500;
		
		var animationLeft = {left : "500px",
							 fontSize : "3em",
							 width: "200px",
							 height: "200px",
							 borderRadius: "2em",
							 backgroundColor: "yellow"};
		
		var animationDown = {top : "250px",
							 width: "100px",
							 height: "100px",
							 fontSize : "1.4em",
							 borderRadius: "0em",
							 backgroundColor: "purple"};
		
		var animationRight = {left : "0px",
							  borderRadius: "2em",
							  backgroundColor: "pink"};
		
		var animationUp = { top : "10px",
							borderRadius: "0em",
							backgroundColor: "green"};
		
		$("#animation_demo").css(divCSS);
		
		$("[id^='btn_']").click(function(){
		$("#animation_demo")
			.animate(animationLeft,
					 3 * animationTime, 
					 function(){ 
						$(this).animate(animationDown,
							animationTime, function() {
								  $(this).animate(animationRight, 
										3 * animationTime, function(){
											  $(this).animate(animationUp, animationTime, function(){
																	
																				 });
																			
											  });
								  });									 
					 });
	});
		
										
	});
	
	
</script>