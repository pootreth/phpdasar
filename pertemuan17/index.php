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

    <br>

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