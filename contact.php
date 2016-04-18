 <?php include ("header.php"); ?>
            <content>
            	
<h1>Kontakt</h1>
	<!-- ANREDE -->
		<div class="input">
			<label class="field required">Anrede*: 
            	<form method="POST" action="form.php">
        			<input type="radio" name="gender" value="f">Frau
                    <input type="radio" name="gender" value="m">Mann </label>
        		</form>
        </div>
	<!-- VORNAME -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label for="vorname" class="field required">Vorname*:
        			<input type="text" id="vorname" name=vorname></label>
        		</form>
		</div>
	<!-- NACHNAME -->
		<div class="input">
			<label class="field required">Nachname*:
            	<form method="POST" action="form.php">
        			<input type="text" name=nachname></label>
        		</form>
		</div>
	<!-- E-MAIL -->
		<div class="input">
			<label class="field required">E-Mail*:
            	<form method="POST" action="form.php">
        			<input type="mail" name=email></label>
        		</form>
		</div>
	<!-- TEL -->
		<div class="input">
			<label class="field">Telefon:
            	<form method="POST" action="form.php">
        			<input type="text" name=telefon></label>
        		</form>
		</div>
	<!-- STRASSE -->
		<div class="input">
			<label class="field">Strasse:
            	<form method="POST" action="form.php">
        			<input type="text" name=strasse></label>
        		</form>
		</div>
	<!-- PLZ -->
		<div class="input">
			<label class="field">PLZ:
            	<form method="POST" action="form.php">
        			<input type="text" name=plz></label>
        		</form>
		</div>
	<!-- ORT -->
		<div class="input">
			<label class="field">Ort:
            	<form method="POST" action="form.php">
        			<input type="text" name=ort></label>
        		</form>
		</div>
	<!-- LAND -->
		<div class="input">
			<label class="field">Land: 
            	<form method="POST" action="form.php">
        			<input type="text" name=land></label>
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
			<label class="field">Kommentar:
            	<form method="POST" action="form.php">
					<textarea rows="3" cols="30">
					</textarea></label>
        		</form>
	<!-- SUBMIT -->
		<div class="submit">
			<input type="submit" value="abschicken" ></div>
                
                
                
            </content> 
 				
				<?php include ("footer.php"); ?>
	        

    