<?php
// cek apakah tidaak ada data di $_GET
if(!isset($_GET["judul"]) ||
    !isset($_GET["penulis"]) ||
    !isset($_GET["penerbit"]) ||
    !isset($_GET["tahun_terbit"]) ||
    !isset($_GET["gambar"]) ){
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detil Koleksi</title>
</head>
<body>

<ul>
<img src="img/<?= $_GET["gambar"]; ?>" width="10%">
    <li>Penulis: <?= $_GET["penulis"];?></li>
    <li>Diterbitkan Oleh: <?= $_GET["penerbit"];?></li>
    <li>Tahun Terbit: <?= $_GET["tahun_terbit"];?></li>
</ul>

<a href="latihan1.php">kembali ke Koleksi Buku</a>
    
</body>
</html>