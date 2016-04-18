<?php include ("head.php"); ?> 
 
<?php $fileName = strrchr($_SERVER['SCRIPT_NAME'],'/');
			 ?>
 
 
 <body>	
 	<div id="wrapper">


		<header>
            <div id="nav1">
                <ul>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Kontakt</a></li>
                </ul>
            </div>
            <br>
         
                  <h1><a href="http://localhost/fotograph">Atelier Lightning </a></h1>
            
                <div id="nav2">
                    <ul >
                        <li><a href="atelier.php" <?php if($fileName == "/atelier.php") echo 'id="aktiv"'; ?>>Atelier</a></li>
                        <li><a href="indoor.php" <?php if($fileName == "/indoor.php") echo 'id="aktiv"'; ?>>Indoor</a></li>
                        <li><a href="outdoor.php" <?php if($fileName == "/outdoor.php") echo 'id="aktiv"'; ?>>Outdoor</a></li>
                    </ul>
                </div>
    
</header>

