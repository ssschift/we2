
<div id="uebersicht"> 
 
	<?php			
		$alledateien = scandir('img'); // Liest den Ordner 'img', welcher alle Bilder enthält
		$img_list = array(); // Kreiert einen Array, in welchem die Bilder nachfolgend gespeichert werden
		
		foreach ($alledateien as $datei) { // Hier werden die Bilder in den Array '$img_list' gespeichert
			$datei_endung = substr ( $datei, -3, 3); 
					
			if ($datei_endung == "JPG" or $datei_endung == "jpg") // Wenn es eine JPEG-Datei ist, wird sie gespeichert
				{
				$dir = dirname(__FILE__);
				$datei_pfad = $dir."/img/".$datei;
				$img_list[] = "/img/".$datei;	
				echo($datei_pfad);
				}			
			else {
				continue;}
		}

		foreach($img_list AS $name) {
			$size = getimagesize($datei_pfad);						 			
			$breite = $size[0];
			$hoehe = $size[1];
			
			if ($breite > $hoehe) {
				echo "<img src='.$name.' alt='' class='uebersicht_breit'>";	
				}
			else if ($hoehe > $breite) {
				echo "<img src='.$name.' alt='' class='uebersicht_hoch
				'>";
				}
								
						
			
					
				
		}
	


/* http://www.php-einfach.de/php-tutorial/php-array/ */
	?>
		<br> <br>
    </div> 	
</p>


