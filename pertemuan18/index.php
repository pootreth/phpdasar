<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';

// konfigurasi pagination
$jumlahDataPerHalaman = 2;
// $result = mysqli_query($db, "SELECT * FROM books");
// $jumlahData = mysqli_num_rows($result);
// atau
$jumlahData = count(query("SELECT * FROM books"));
// var_dump($jumlahData);

$jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman);
// var_dump($jumlahHalaman);

// pembulatan
// round : dibulatkan ke nilai terdekat dari float, mis. 1.2=1, 2,8=3
// floor : dibulatkan ke bawah dari float, mis. 1.2=1, 2,8=2
// ceil : dibulatkan ke atas dari float, mis. 1.2=2, 2,8=3

// cara panjang
// if (isset($_GET["halaman"])) {
//     $halamanAktif = $_GET["halaman"];
// }else{
//     $halamanAktif=1;
// }

// ternary
$halamanAktif = (isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
// var_dump($halamanAktif);

// jumlah data per halaman 2
// halaman = 2, awaldata= 2
// halaman = 3, awaldata=4

// jumlah data per halaman 4
// halaman = 2, awaldata = 4
// halaman = 3, awaldata = 8

$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
// cek jumlah awalData
// var_dump($awalData);

$book = query("SELECT * FROM books LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan

if( isset($_POST["caribtn"]) ){
    $book = search($_POST["cari"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <a href="logout.php">Logout</a>
    <h1>Koleksi Buku</h1>

    <a href="tambah.php">Tambah Koleksi Buku</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="cari" size="50" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="caribtn">Cari</button>
    </form>

    <br><br>

    <!-- navigasi -->

    <!-- prev -->
    <!-- &lt; sama dg &laquo; -->
    <?php if($halamanAktif>1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>


    <?php for( $i = 1; $i<=$jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?> " style="font-weight: bold; color:blue;"> <?= $i; ?> </a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?> "> <?= $i; ?> </a>
        <?php endif; ?>
    <?php endfor; ?>

    <!-- next -->
    <!-- &gt; sama dg &raquo; -->
    <?php if($halamanAktif<$jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>ISBN</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $book as $row ) :?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="edit.php?id=<?= $row["id"]; ?>">Ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" >hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]; ?>" width="75">
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["isbn"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    
    </table>
</body>
</html>