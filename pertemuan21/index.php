<?php
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';
$book = query("SELECT * FROM books");

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
    <style>
        .loader{
            width: 100px;
            position: absolute;
            top: 140px;
            left: 500px;
            z-index: -1;
            display: none;
        }
        @media print{
            .logout, .tambah, .form-cari, .aksi{
                display: none;
            }
        }
    </style>
</head>
<body>

    <a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
    <h1>Koleksi Buku</h1>

    <a href="tambah.php" class="tambah">Tambah Koleksi Buku</a>
    <br><br>

    <form action="" method="POST" class="form-cari">
        <input type="text" name="keyword" size="50" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off" id="keyword">
        <button type="submit" name="caribtn" id="btn-cari">Cari</button>
        <img src="img/loader.gif" class="loader">
    </form>

    <br>

    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th class="aksi">Aksi</th>
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
        <td class="aksi">
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
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>