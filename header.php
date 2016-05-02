<?php include ("head.php"); ?> 

<?php $fileName = strrchr($_SERVER['SCRIPT_NAME'],'/');
		 ?>


<body>	
<div id="wrapper">


	<header>
		<div id="nav1">
			<ul>
				<li><a href="preise.php"><img src="img/icons/facebook.svg" alt="Logo Facebook"></a></li>
				<li><a href="about.php"><img src="img/icons/about.svg" alt="Logo About"></a></li>
				<li><a href="contact.php"><img src="img/icons/contact.svg" alt="Logo Contact"></a></li>
			</ul>
		</div>
		<br>

        <div>
            <a href="http://localhost:8888/atelier_lightning">
                <img src="img/L_Atelier_Lightning.svg" alt="Logo Atelier Lightning" class="logo">
            </a>
        </div>

        <div id="nav2">
		  <ul>
			<li><a href="atelier.php" <?php if($fileName == "/atelier.php") echo 'id="aktiv"'; ?>>Atelier</a></li>
			<li><a href="indoor.php" <?php if($fileName == "/indoor.php") echo 'id="aktiv"'; ?>>Indoor</a></li>
			<li><a href="outdoor.php" <?php if($fileName == "/outdoor.php") echo 'id="aktiv"'; ?>>Outdoor</a></li>
		  </ul>
		</div>

</header>

