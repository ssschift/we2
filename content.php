
<div id="uebersicht"> 
 
	<?php			
		$alledateien = scandir('img'); //Ordner "img" auslesen
		 
		$img_list = array();
		 
		foreach ($alledateien as $datei) { //Ausgabeschleife
		 	
			$datei_endung = substr ( $datei, -3, 3
			);
					
			if ($datei_endung == "JPG" or $datei_endung == "jpg"){
				$dir = dirname(__FILE__);
				$datei_pfad = $dir."/img/".$datei;
				
				$img_list[] = "/img/".$datei;	
			}			
			else {
				continue;}
		}

		foreach($img_list AS $name) {
			$size = getimagesize($datei_pfad);						 			$breite = $size[0];
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


