<?php
// Pertemuan 2
// Sintaks PHP

// Standar Output
// echo, print, print_r (cetak array)
// var_dump = melihat isi variable

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tetapi boleh mengandung angka
// $nama = "Yemima Sutanto";
// echo "halo, nama saya $nama";

// Operator
// aritmatika
// +-*/
// $x=10;
// $y=20;
// echo $x+$y;

// penggabungan string / concatenation / concat
// .
// $nama_depan = "Yemima";
// $nama_belakang = "Sutanto";
// echo $nama_belakang . " " . $nama_belakang;

// assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x += 5;
// echo $x;
$nama = "Yemima";
$nama .= " ";
$nama .= "Sutanto";
// echo $nama;

// Perbandingan
// <,>,<=,>=,==
// var_dump(1 < 3);
// var_dump(1 == "1");

// identitas
//  ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?echo "Ini adalah paragraf"; ?></p>
</body>
</html>