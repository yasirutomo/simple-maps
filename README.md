# Simple Maps

Simple maps adalah sebuah web sederhana untuk menyimpan dan menampilkan lokasi dengan menggunakan PHP, HTML dan MySQL. Map di visualisasi dengan memanfaatkan API dari Google Maps (Key dapat di request, read: https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key) dengan parameter koordinat lokasi tertentu. 

## Gambaran Umum

Sebagai gambaran, struktur simple maps sangat sederhana dengan bagian yang dapat dijabarkan sebagai berikut:

* **database**: berisi file sql database yang digunakan
* **inc**: konfigurasi database (menggunakan mysql - PHP 5.6, untuk PHP 7.0 silahkan ubah ke mysqli)
* **index.php**: halaman depan aplikasi
* **input_lokasi.php**: proses input lokasi baru pada database
* **tampil.php**: Menampilkan list lokasi yang sudah tersimpan dalam database
* **tampil_map.php**: Menampilkan lokasi dalam map dengan parameter koordinat

## Kontributor

* [Muhammad Nur Yasir Utomo](https://www.facebook.com/yasirutomo)