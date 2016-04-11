
<div id="uebersicht"> 
 
	<?php			
		$alledateien = scandir('img'); //Ordner "files" auslesen
		 
		foreach ($alledateien as $datei) { // Ausgabeschleife
		   echo $datei."<br />"; //Ausgabe Einzeldatei
		};	 
	?>
		
    </div> 	
</p>
