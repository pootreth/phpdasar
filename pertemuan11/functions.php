<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    // wadah yg lbh spesifik
    $wadah = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $wadah[] = $row;
    }
    return $wadah;
}

function tambah($data){
    global $db;
    // ambil data dari tiap elemen dalam form
    $isbn = htmlspecialchars($data["isbn"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO books VALUES (NULL,'$isbn','$judul','$penulis','$penerbit','$gambar')" ;
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM books WHERE id=$id");

    return mysqli_affected_rows($db);
}
?>