<?php include ("header.php"); ?>
     
<content>



<div id="myCarousel" class="carousel slide">

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php slider_erstellen() ;?>


  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br><br>
    </content> 
 			


<?php include ("footer.php"); ?>
