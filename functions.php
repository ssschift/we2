<?php			
		
function bilder_laden($category){
		$alledateien = scandir('img/'.$category); // Liest den Ordner 'img', welcher alle Bilder enthält
			
		foreach ($alledateien as $datei) { // Hier werden die Bilder in den Array '$img_list' gespeichert
			
			$dir = dirname(__FILE__);
			$datei_pfad = $dir."/img/".$category."/".$datei;	
			
			if (is_file($datei_pfad)) // Wenn keine Datei wird übersprungen
				{
				$datei_pfad_img = "/img/".$category."/".$datei;

				$size = getimagesize($datei_pfad);						 			
				$breite = $size[0]; $hoehe = $size[1];
			
				if ($breite > $hoehe) {
					echo "<div class='box_b'>
					<a href='slide.php?cat=$category&pic=$datei'>
						<img src='.$datei_pfad_img' 
							alt=''	
								class='uebersicht_breit'>
					</a></div>" ;	
					
					
					}
				else if ($hoehe > $breite) {
					echo "<div class='box_h'><img src='.$datei_pfad_img' alt='' class='uebersicht_hoch'></div>";
					}				
				}		
			
			else {
				continue;}
			};
			
		};
		
		
		
		
function slider_erstellen(){
	
$category = $_GET["cat"];
$picture = $_GET["pic"];


$alledateien = scandir('img/'.$category); 
$counter = 0;
$dir = dirname(__FILE__);
if ($category == ""){
	$datei_pfad = "index.php";}
else {$datei_pfad = $category.".php";}
			

foreach ($alledateien as $datei) {
	$akt_datei = "img/".$category."/".$picture;
	$slider_datei = "img/".$category."/".$datei;
	
	if (!is_file($slider_datei)) {// Wenn keine Datei wird übersprungen
		continue;}
		
	
	if ($counter == 0){
		echo "<div class='carousel-inner' role='listbox'>
	    <div class='item active'>
		<a href='$datei_pfad' class='gal'><img src='$akt_datei' alt='$picture'></a>
	    </div>";
		$counter = 1 ;
		}
		
	else {
		echo "<div class='item'>
		<a href='$datei_pfad' class='gal'><img src='$slider_datei' alt='$slider_datei'></a>
		</div>";
		}
};

};
	
	/*	if ($tempStelle != $stelle){ 		
		if ($tempStelle < $laenge){
			$tempStelle +=1;}
		else {
			$tempStelle = 0;}	
	}
	else {break;}*/
    
	
?>


    
 

