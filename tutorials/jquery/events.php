<h4>JQuery Events</h4>

<img src="./images/dwerghamster.jpg" alt="dwerghamster" >
<p>Wat is dit voor dier?</p>
<button id="btnNextAnimal">Volgende dier</button>


<script>
	$("document").ready(function(){
		//alert("Hallo!!");
		$("img").mouseenter(function(){
			$(this).css("border", "2px solid black");
			$("p").text("Dit is een Russische dwerghamster");
		});
		
		$("img").mouseleave(function(){
			$(this).css("border", "0px solid black");
			$("p").text("Wat is dit voor dier?");
		});
		
		var buttonSkin = {"padding" : "0.3em",
						  "font-size" : "3em",
						  "color" : "rgba(0, 0, 0, 0.5)",
						  "width" : "700"};
		
		$("#btnNextAnimal").css(buttonSkin).click(function(){
			$("img[alt='dwerghamster']").attr("src", "./images/snowleopard.jpg");		
		});
		
	});

</script>
