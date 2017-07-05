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

  <script>
    var marker;
      function initialize() {
        // Variabel untuk menyimpan informasi (desc)
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel untuk menyimpan peta Roadmap
        var mapOptions = {
          mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan petanya
        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        // Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();

        // Pengambilan data dari database
        <?php
            $query = mysql_query("select * from lokasi");
            while ($data = mysql_fetch_array($query))
            {
                $nama = $data['nama'];
                $lat = $data['lat'];
                $lon = $data['lng'];
                
                echo ("addMarker($lat, $lon, 'Lokasi : $nama<br/>Latitude : $lat<br/>Longitude : $lon');\n");                      
            }
          ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: map,
                position: lokasi
            });       
            map.fitBounds(bounds);
            bindInfoWindow(marker, map, infoWindow, info);
         }
        
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, map, infoWindow, html) {
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(map, marker);
          });
        }
 
        }
      google.maps.event.addDomListener(window, 'load', initialize);
   </script>

 </head>
 <body>
  <a href="index.php">Input Lokasi</a> | 
  <a href="tampil.php">Lihat Daftar Lokasi </a> |
  <a href="semua.php">Semua Lokasi</a> |
  <a href="cusmark.php">Custom Marker</a><br/><br/>
  <div class="panel-body">
      <div id="map-canvas" style="width:500px;height:300px;"></div>
  </div>
 </body>
</html>
