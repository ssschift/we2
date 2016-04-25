<?php include ("header.php"); ?>
	

Gerne geben wir Ihnen auf dieser Seite eine grobe Berechnung der Preise. 

<br><br>
<h2>Zweck</h2>
	Für welchen Zweck möchten Sie mich buchen? 

<p>Ihre Auswahl: <span id="text"></span></p>


<select id="firstSelect">	
	<option value="none">Bitte wählen Sie</option>
	<option value="hochzeit">Hochzeit</option>
	<option value="portrait">Portraitfoto</option>
	<option value="akt">Aktfotografie</option>	<option value="produkt">Produktfoto</option>
	<option value="geburtstag">Geburtstag</option>
	<option value="beerdigung">Beerdigung</option>
		
</select><br><br>

<div id="zeit">Wie lange soll das dauern? <br>

<form oninput="numerisch.value=auswertung.value">

<input id="form" type="range" name="auswertung" min="1" max=8><br>
<output name="numerisch"></output> Stunden.

</form></div>

<br>





<script>
	$("#zeit").hide();

	$("#firstSelect").change(function(){
	var auswahl=$("#firstSelect option:selected").text();
	var auswahlValue = $("#firstSelect option:selected").val();
	
		if (auswahlValue != "none"){
			$("#text").text(auswahl);
			$("#zeit").show();}
	});
	
	
	
</script>
	
	
	

        
<?php include ("footer.php"); ?>

