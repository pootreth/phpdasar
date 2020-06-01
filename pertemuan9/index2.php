<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel
$result = mysqli_query($db, "SELECT * FROM buku");

// munculin error
if( !$result ){
    echo mysqli_error($db);
}

// ambil data(fetch) buku dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// $book = mysqli_fetch_row($result);
// var_dump($book[1]);

// mysqli_fetch_assoc() // mengembalikan array asosiatif
// $book = mysqli_fetch_assoc($result);
// var_dump($book["penerbit"]);

// mysqli_fetch_array() // bisa mengembalikan array numerik dan asosiatif, tapi data jadi dobel
// $book = mysqli_fetch_array($result);
// var_dump($book);

// mysqli_fetch_object()
// $book = mysqli_fetch_object($result);
// var_dump($book->judul);
// var_dump($result);
// while ($book = mysqli_fetch_assoc($result) ) {
//     var_dump($book);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Koleksi Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
    </tr>

    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) :?>
    <tr>
        <td><?= $i ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]; ?>" width="75">
        </td>
        <td><?= $row["judul"]; ?></td>
        <td><?= $row["penulis"]; ?></td>
        <td><?= $row["penerbit"]; ?></td>
        <td><?= $row["tahun_terbit"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
    
    </table>
</body>
</html>