<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kontakt</title>
</head>

<body>
<div id="kontakt">
	<h1>Kontakt</h1>
	<!-- ANREDE -->
		<div class="input">
			<label class="field required">Anrede*: </label>
            	<form method="POST" action="form.php">
        			<input type="radio" name="gender" value="f">Frau
                    <input type="radio" name="gender" value="m">Mann
        		</form>
        </div>
	<!-- VORNAME -->
		<div class="input">
            	<form method="POST" action="form.php">
                	<label for="vorname" class="field required">Vorname*:</label>
        			<input type="text" id="vorname" name=vorname>
        		</form>
		</div>
	<!-- NACHNAME -->
		<div class="input">
			<label class="field required">Nachname*:</label>
            	<form method="POST" action="form.php">
        			<input type="text" name=nachname>
        		</form>
		</div>
	<!-- E-MAIL -->
		<div class="input">
			<label class="field required">E-Mail*:</label>
            	<form method="POST" action="form.php">
        			<input type="mail" name=email>
        		</form>
		</div>
	<!-- TEL -->
		<div class="input">
			<label class="field">Telefon:</label>
            	<form method="POST" action="form.php">
        			<input type="text" name=telefon>
        		</form>
		</div>
	<!-- STRASSE -->
		<div class="input">
			<label class="field">Strasse:</label>
            	<form method="POST" action="form.php">
        			<input type="text" name=strasse>
        		</form>
		</div>
	<!-- PLZ -->
		<div class="input">
			<label class="field">PLZ:</label>
            	<form method="POST" action="form.php">
        			<input type="text" name=plz>
        		</form>
		</div>
	<!-- ORT -->
		<div class="input">
			<label class="field">Ort:</label>
            	<form method="POST" action="form.php">
        			<input type="text" name=ort>
        		</form>
		</div>
	<!-- LAND -->
		<div class="input">
			<label class="field">Land: </label>
            	<form method="POST" action="form.php">
        			<input type="text" name=land>
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
			<label class="field">Kommentar:</label>
            	<form method="POST" action="form.php">
					<textarea rows="3" cols="30">
					</textarea>
        		</form>
	<!-- SUBMIT -->
		<div class="submit">
			<input type="submit" value="abschicken" ></div>
</body>
</html>
