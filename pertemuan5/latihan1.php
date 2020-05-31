<?php
// Array : variable yang memiliki banyak nilai
// elemen pada array boleh memilik tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0


// membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);

// Menampilkan 1 elemen pada array
// echo "<br>";
// echo $arr1[1];
// echo "<br>";
// echo $bulan[2];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[]="Kamis";
$hari[]="Jumat";
echo "<br>";
var_dump($hari);

?>