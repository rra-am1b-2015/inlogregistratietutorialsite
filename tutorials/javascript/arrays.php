<h4>JavaScript Array's</h4>
<p id="ptag"></p>
<button id="btn_array">verwijder</button>


<script>
	/**********************************************************************
	 *	http://www.w3schools.com/jsref/jsref_obj_array.asp
	 *	Tutorialsite voor JavaScript Arrays
	 *********************************************************************/
	 
	var car = ["Mercedes", "BMW", "Fiat", "Ferrari", "Lamborghini", "Daf"];
	var par1 = document.getElementById("ptag");
	var arraySize = car.length;
	//par1.innerHTML = car[arraySize-1];
	showArray();
	
	
	function showArray()
	{
		var tekst = "";
		for ( var i = 0; i < arraySize; i++)
		{
			tekst += car[i] + "<br>";
		}		
		par1.innerHTML = tekst;
	}
	
	btn = document.getElementById("btn_array");
	
	btn.addEventListener("click", function(){
		showArray();	
	});
	
	btn.onmouseover = function(){
		//alert("Er is onmouseover gebruikt in een script");
	}
	
	btn.addEventListener("mouseleave", function(){
		//alert("Er is een eventListener gebruikt");
	});
	
	
	
</script>