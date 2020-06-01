<?php
// variable scope / lingkup variable
// GLOBAL
// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }

// tampilX();

// SUPERGLOBALS
// variable global milik PHP
// merupakan array asosiatif
// 1. $_GET
// $_GET["nama"] = "Yemima Sutanto";
// var_dump($_GET);
// atau
// localhost/phpdasar/pertemuan7/latihan1.php?nama=Yemima Sutanto&nrp=160817006

// 2. $_POST
// var_dump($_POST);

// 3. $_SERVER
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

$books=[
    [
        "judul" => "Runtuhnya Hindia Belanda",
        "penulis" => "Onghokham",
        "penerbit" => "Gramedia",
        "tahun_terbit" => "2017",
        "gambar" => "1.jpg"
    ],

    [
        "judul" => "The American Adventures",
        "penulis" => "Mark Twain",
        "penerbit" => "Elek Media Komputindo",
        "tahun_terbit" => "2016",
        "gambar" => "2.jpg"
    ],

    [
        "judul" => "Kitab Bahasa Tubuh",
        "penulis" => "Allan dan Barbara",
        "penerbit" => "Gramedia",
        "tahun_terbit" => "2018",
        "gambar" => "3.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Koleksi Buku</h1>
<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <a href="latihan2.php?judul=<?= $book["judul"];?>&penulis=<?= $book["penulis"];?>&penerbit=<?= $book["penerbit"];?>&tahun_terbit=<?= $book["tahun_terbit"];?>&gambar=<?= $book["gambar"];?>"><?= $book["judul"]; ?></a>
        </li> 
    <?php endforeach; ?>
</ul>
</body>
</html>