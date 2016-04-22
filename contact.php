 <?php include ("header.php"); ?>

<div id="form-main">
  <div id="form-div">

		<form method="POST" action="http://mmp.mediologie.ch/im2/forms/ausgabe.php">
		<h2>Kontakt</h2>
	
        
    <!-- ANREDE -->
		<div class="input">
			<label class="field required">
            	<form method="POST" action="form.php">
        			<input type="radio" name="gender" value="f">Frau
                    <input type="radio" name="gender" value="m">Mann </label>
        		</form>
        </div>
	<!-- VORNAME -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label for="vorname" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input">
        			<input type="text" placeholder="Name*" id="vorname" name=vorname></label>
        		</form>
		</div>
	<!-- NACHNAME -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label class="field required">
        			<input type="text" placeholder="Nachname*" name=nachname></label>
        		</form>
		</div>
	<!-- E-MAIL -->
		<div class="input">
        		<form method="POST" action="form.php">
					<label class="field required">
        			<input type="mail" placeholder="Email*" name=email></label>
        		</form>
		</div>
	<!-- TEL -->
		<div class="input">
			    <form method="POST" action="form.php">
                    <label class="field">
        			<input type="text" placeholder="Telefon" name=telefon></label>
        		</form>
		</div>
	<!-- STRASSE -->
		<div class="input">
				<form method="POST" action="form.php">
                	<label class="field">
        			<input type="text" placeholder="Strasse" name=strasse></label>
        		</form>
		</div>
	<!-- PLZ -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label class="field">
        			<input type="text" placeholder="PLZ" name=plz></label>
        		</form>
		</div>
	<!-- ORT -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label class="field">
        			<input type="text" placeholder="Ort" name=ort></label>
        		</form>
		</div>
	<!-- LAND -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label class="field">
        			<input type="text" placeholder="Land" name=land></label>
        		</form>
		</div>
	<!-- BROSCH -->
		<div class="input">
			<form method="POST" action="form.php">
        		<input type="checkbox" name="broschuere" value="">Bitte senden Sie mir eine Broschüre zu.
        	</form>
		</div>
	<!-- KOMMENTAR -->
		<div class="input">
            	<form method="POST" action="form.php">
                    <label class="field" placeholder="Land">
				 <textarea placeholder="Kommentar" rows="3"  cols="30" ></textarea> 
        		</form>
                </div>
	<!-- SUBMIT -->
		<div class="submit">
			<input type="submit" value="abschicken" ></div>
            <br>
			</form>
      


</div>
		 	
    <div id="map-div">
        <br>
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:400px;width:520px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://www.casinosystem.net/'>Casinos Echtgeld</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6a9abe9136b6aeee8255d8d3886b0cf5dd1e0217'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(46.2086,6.12360000000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(46.2086,6.12360000000001)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br><br>1203 Geneva<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>	
</div>
<?php include ("footer.php"); ?>
	        

    