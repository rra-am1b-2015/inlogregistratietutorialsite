<h4>JQuery Animation</h4>

<div id="animation_demo">
	Animate Me!
</div>

<button id="btn_animate">Start Animatie!</button>


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
		var animationTime = 500;
		
		var animationLeft = {left : "600px"};
		
		var animationDown = {top : "250px"};
		
		var animationRight = {left : "0px"};
		
		var animationUp = { top : "10px"};
		
		$("#animation_demo")
			.css(divCSS)
			.animate(animationLeft,
					 3 * animationTime, 
					 function(){ 
						$(this).animate(animationDown,
							animationTime, function() {
								  $(this).animate(animationRight, 
										animationTime, function(){
											  $(this).animate(animationUp, animationTime, function(){
																	
																				 });
																			
											  });
								  });									 
					 });
										
	});
</script>