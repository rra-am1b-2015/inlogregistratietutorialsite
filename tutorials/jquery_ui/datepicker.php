<h4>jQuery UI datepicker</h4>
<br>
Kalender element: <input type="text" id="datepicker" />
<br>

<button id="changeDatepicker" class="button">Verander datepicker</button>

<script>
	$(document).ready(function(){
		
		// De datepicker
		var datepickerProperties = { dateFormat : "dd-mm-yy",
									 dayNamesMin : [ "zo", "ma", "di", "wo", "do", "vr", "za"],
									 changeYear	: true,
									 yearRange	: "1900:2030"};
		
		$("#datepicker").datepicker(datepickerProperties);
		
		$("#changeDatepicker").click(function(){		
			var firstday = $("#datepicker").datepicker("option", "firstDay");
			alert("option firstday = " + firstday);
			$("#datepicker").datepicker("option", "firstDay", 1);
			var firstday = $("#datepicker").datepicker("option", "firstDay");
			alert("option firstday = " + firstday);
			$("#datepicker").datepicker("option", "changeMonth", true);
			
		});
	
	});

</script>