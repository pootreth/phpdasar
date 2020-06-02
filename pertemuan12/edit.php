<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// var_dump($id);

// query data koleksi buku berdasarkan id
$book = query("SELECT * FROM books WHERE id=$id")[0];
// var_dump($book);
// var_dump($book["judul"]);

// cek apakah tombol submit sudah diakses apa blm
if( isset($_POST["submit"]) ){

    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST)>0 ){
        echo "
             <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else{
        echo "
            <script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
            </script>";
        // echo("Error". $db->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Koleksi Buku</title>
</head>
<body>
<h1>Ubah Detil Koleksi Buku</h1>

<form action="" method="POST">
    <!--  isi -->
    <input type="hidden" name="id" value="<?= $book["id"]; ?>">
    <ul>
        <li>
        <label for="isbn">ISBN:</label>
        <input type="text" name="isbn" id="isbn" required value="<?= $book["isbn"] ?>">
        </li>

        <li>
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" required  value="<?= $book["judul"] ?>">
        </li>

        <li>
        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" id="penulis" required value="<?= $book["penulis"] ?>">
        </li>
   
        <li>
        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" required value="<?= $book["penerbit"] ?>">
        </li>

        <li>
        <label for="gambar">Gambar:</label>
        <input type="text" name="gambar" id="gambar" required value="<?= $book["gambar"] ?>">
        </li>
        <br>
        <button type="submit" name="submit">Update Data</button>
    </ul>
</form>
</body>
</html>