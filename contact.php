 <?php include ("header.php"); ?>
	<div id="form-main">
    
<form id="form-div">
          <h2>Kontakt</h2>    
    

<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">Herr
</label>
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">Frau
</label>
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">Firma
</label>
    
  <fieldset class="form-group">
    <label for="exampleInputVorname1"></label>
    <input type="text" class="form-control" id="exampleInputVorname1" placeholder="Vorname">
    <small class="text-muted"></small>
  </fieldset>
    
  <fieldset class="form-group">
    <label for="exampleInputNachname1"></label>
    <input type="text" class="form-control" id="exampleInputNachname1" placeholder="Nachname">
  </fieldset>
    
   <fieldset class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="Email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </fieldset>
    
  <fieldset class="form-group">
    <label for="Kommentar"></label>
    <label for="Kommentar"></label>
    <textarea placeholder="Kommentar" class="form-control" id="Kommentar" rows="3"></textarea>
  </fieldset>

  <div class="checkbox">
    <label>
      <input type="checkbox">Senden Sie mir eine Broschüre.
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Abschicken</button>
</form>	
        <br><br>
    <div id="map-div">
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:300px;width:420px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://www.bonus-casino.biz/'>www.bonus-casino.biz</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=055cd8edca644fa5a608b9d6ce963a82e345c43f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(46.9167,7.466699999999946),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(46.9167,7.466699999999946)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br><br> Bern<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>	
        <br><br>
</div>
<?php include ("footer.php"); ?>
	       