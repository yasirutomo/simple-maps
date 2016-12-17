<?php
/*
Author : Muhammad Nur Yasir Utomo
Email : yasirutomo@gmail.com
*/
include ('inc/config.php');
//data dari lokasi

$nama = $_POST['nama'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

echo "$nama | $lat | $lng";

$aksi = $_POST['aksi'];
$id = $_POST['id'];

 $sql = "INSERT INTO lokasi(nama,lat,lng)
  VALUES('$nama','$lat','$lng')";

$result = mysql_query($sql) or die(mysql_error());
echo '<br/><br/><a href="index.php"><< Tambah Lokasi Lagi</a> | <a href="tampil.php">Lihat Semua Lokasi >></a>';
?>