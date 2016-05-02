<?php include ("header.php"); ?> 

<div id="form-main">
    
<form id="form-div">
          <h2>Kontakt</h2>  

<form id="form_id" method="post" name="myform"> 

<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Herr">Herr
</label>
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Frau">Frau
</label>
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Firma">Firma
</label>
    
  <fieldset class="form-group">
    <label for="exampleInputVorname1"></label>
    <input type="text" class="form-control" id="Vorname" placeholder="Vorname" required>
    <small class="text-muted"></small>
  </fieldset>
    
  <fieldset class="form-group">
    <label for="exampleInputNachname1"></label>
    <input type="text" class="form-control" id="Nachname" placeholder="Nachname" required>
  </fieldset>
    
   <fieldset class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="Email" class="form-control" id="Email" placeholder="Email" required>
  </fieldset>
    
   <fieldset class="form-group">
    <label for="exampleInputAdresse1"></label>
    <input type="Text" class="form-control" id="Adresse" placeholder="Adresse" required>
  </fieldset>
    
    <fieldset class="form-group">
    <label for="exampleInputPLZ1"></label>
    <input type="Text" class="form-control" id="PLZ" placeholder="PLZ" required>
    </fieldset>
    
    <fieldset class="form-group">
    <label for="exampleInputOrt1"></label>
    <input type="text" class="form-control" id="Ort" placeholder="Ort" required>
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
  <button onclick="myfunction()" type="submit" id="btn" class="btn">Abschicken</button>
</form>	
    
    <script>// Submit form with id function
function myfunction() {
var anrede = $('input[name=anrede]:checked').val()
var name = document.getElementById("Name").value;
var vorname = document.getElementById("Vorname").value;
var  email = document.getElementById("Email").value;
var  adresse = document.getElementById("Adresse").value;
var  plz = document.getElementById("PLZ").value;
var  ort = document.getElementById("Ort").value;
var  kommentar = document.getElementById("Kommentar").value;
if (validation()) // Calling validation function
{
document.getElementById("form_id").action = "success.php"; // Setting form action to "success.php" page
document.getElementById("form_id").submit(); // Submitting form
}
}
// Name and Email validation Function
function validation() {
var name = document.getElementById("Name").value;
var vorname = document.getElementById("Vorname").value;
var email = document.getElementById("Email").value;
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
if (name === '' || vorname === '' || email === '') {
alert("Please fill all fields...!!!!!!");
return false;
} else if (!(email).match(emailReg)) {
alert("Invalid Email...!!!!!!");
return false;
} else {
return true;
}
}
</script>
    
<br><br>
    <div id="map-div">
<p>Adresse: Beispielweg 1,<br> 3000 Beispielstadt<br><br>Anfahrt</p>
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:520px;'><div id='gmap_canvas' style='height:300px;width:420px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://www.bonus-casino.biz/'>www.bonus-casino.biz</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=055cd8edca644fa5a608b9d6ce963a82e345c43f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(46.9167,7.466699999999946),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(46.9167,7.466699999999946)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br><br> Bern<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<div><br></div>
        </form>
</div>

<?php include ("footer.php"); ?>