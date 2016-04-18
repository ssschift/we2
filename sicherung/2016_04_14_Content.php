
<div id="uebersicht"> 
 
	<?php			
		$alledateien = scandir('img'); // Liest den Ordner 'img', welcher alle Bilder enthält
		$img_list = array(); // Kreiert einen Array, in welchem die Bilder nachfolgend gespeichert werden
		
		foreach ($alledateien as $datei) { // Hier werden die Bilder in den Array '$img_list' gespeichert
			
			
			
			
			$dir = dirname(__FILE__);
			$datei_pfad = $dir."/img/".$datei;	
			
				
			if (is_file($datei_pfad)) // Wenn keine Datei wird übersprungen
				{
				$datei_pfad_img = "/img/".$datei;
				$img_list[] = "/img/".$datei;	

				$size = getimagesize($datei_pfad);						 			
				$breite = $size[0];
				$hoehe = $size[1];
			
				if ($breite > $hoehe) {
					echo "<img src='.$datei_pfad_img.' alt='' class='uebersicht_breit'>";	
					}
				else if ($hoehe > $breite) {
					echo "<img src='.$datei_pfad_img.' alt='' class='uebersicht_hoch'>";
					}
				
				}		
			
			else {
				continue;}
			};

	
	


/* http://www.php-einfach.de/php-tutorial/php-array/ */
	?>
		<br> <br>
    </div> 	
</p>


