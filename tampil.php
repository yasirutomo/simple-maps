<?php
/*
Author : Muhammad Nur Yasir Utomo
Email : yasirutomo@gmail.com
*/ 
include ('inc/config.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>List Maps - www.yasirblog.com</title>
  </head>
  <body>
    <a href="index.php">Input Lokasi</a> | 
    <a href="tampil.php">Lihat Daftar Lokasi </a> |
    <a href="semua.php">Semua Lokasi</a> |
    <a href="cusmark.php">Custom Marker</a><br/><br/>
      <table border="1" >
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>Peta</td>
        </tr>
        
          <?php
          $cari = mysql_query("select * from lokasi");
          
          while($dapat = mysql_fetch_array($cari)){
            echo "
              <tr>
               <td>$dapat[idlokasi]</td>
               <td>$dapat[nama]</td>
               <td>
                 <a href='tampil_map.php?idlokasi=$dapat[idlokasi]'>Lihat Map</a>
               </td>
              </tr>
            ";
          }
      ?>
      
      </table>
  </body>
</html>