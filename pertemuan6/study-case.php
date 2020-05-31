<?php
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
        "penulis" => "Allan & Barbara",
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
    <title>Book Addict</title>
</head>
<body>
    <h1>Koleksi Buku</h1>
<!-- Jika mahasiswa lebih dari 1 (array multi dimensi) -->
<?php foreach ($books as $book) : ?>
    <ul>
    <img src="img/<?= $book["gambar"]; ?>" width="10%">
        <li>Judul: <?= $book["judul"];?></li> 
        <li>Penulis: <?= $book["penulis"];?></li>
        <li>Diterbitkan Oleh: <?= $book["penerbit"];?></li>
        <li>Tahun Terbit: <?= $book["tahun_terbit"];?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>