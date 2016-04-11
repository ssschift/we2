
<div id="uebersicht"> 
 
	<?php			
		$alledateien = scandir('img'); //Ordner "img" auslesen
		 
		$img_list = array();
		 
		foreach ($alledateien as $datei) { // Ausgabeschleife
		 	
			$datei_name = substr ( $datei, -3, 3
			);
			
			
			if ($datei_name == "JPG"){
				$img_list[] = "/img/".$datei;
			}
			
			else {
				continue;}
		}

		foreach($img_list AS $name) {
			echo "<img src='.$name.' alt='' class='thumb'>";				;
				
		}
	


/* http://www.php-einfach.de/php-tutorial/php-array/ */
	?>
		
    </div> 	
</p>


