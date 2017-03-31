<?php
/*
Author : Muhammad Nur Yasir Utomo
Email : yasirutomo@gmail.com
*/ 
include ('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Input Maps - www.yasirblog.com</title>
  <!-- <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script> --> <!-- old version, doesnt work in localhost --> 
  <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&sensor=false" type="text/javascript"></script>
 </head>
 
 <body>
  <a href="index.php">Input Lokasi</a> | 
  <a href="tampil.php">Lihat Daftar Lokasi </a> |
  <a href="semua.php">Semua Lokasi</a> |
  <a href="cusmark.php">Custom Marker</a><br/><br/>
  <div id="map" style="width:600px;height: 300px;"></div>
   <form   method="POST" id="form1" action="input_lokasi.php" class='form-horizontal'>
    <br/>
    <div class="control-group">
       <label class="control-label" for="nama">Nama Lokasi</label>
       <div class="controls">
         <input type="text" name='nama' class='input-xlarge'>
       </div>
     </div> 
     <div class="control-group">
       <label class="control-label" for="lat">latitude</label>
       <div class="controls">
         <input type="text" name='lat' id='lat'  >
       </div>
     </div>
     <div class="control-group">
       <label class="control-label" for="lng">Longitude</label>
       <div class="controls">
         <input type="text" name='lng' id='lng' >
       </div>
     </div>
     <div class="control-group">
       <div class="controls">
         <button type="submit" class="btn btn-success" name='aksi'>Submit</button>
       </div>
     </div>
    </form>

<script type="text/javascript">
    document.getElementById('reset').onclick= function() {
        var field1= document.getElementById('lng');
 var field2= document.getElementById('lat');
        field1.value= field1.defaultValue;
 field2.value= field2.defaultValue;
    };
</script>    
<script type="text/javascript">
     function updateMarkerPosition(latLng) {
  document.getElementById('lat').value = [latLng.lat()];
  document.getElementById('lng').value = [latLng.lng()];
  }

    var myOptions = {
      zoom: 7,
        scaleControl: true,
      center:  new google.maps.LatLng(-6.2103572705384975,106.85128400000008),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };

 
    var map = new google.maps.Map(document.getElementById("map"),
        myOptions);

 var marker1 = new google.maps.Marker({
 position : new google.maps.LatLng(-6.2103572705384975,106.85128400000008),
 title : 'lokasi',
 map : map,
 draggable : true
 });
 
 //updateMarkerPosition(latLng);

 google.maps.event.addListener(marker1, 'drag', function() {
  updateMarkerPosition(marker1.getPosition());
 });
</script>

 </body>
</html>