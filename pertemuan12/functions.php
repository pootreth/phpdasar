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

function search($cari){
    $query = "SELECT * FROM books WHERE judul LIKE '%$cari%' OR penulis LIKE '%$cari%' OR penerbit LIKE '%$cari%' OR ISBN LIKE '%$cari%'
    ";

    return query($query);
}

function hapus($id) {
    global $db;
    mysqli_query($db, "DELETE FROM books WHERE id=$id");

    return mysqli_affected_rows($db);
}

function ubah($data){
    global $db;

    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $isbn = htmlspecialchars($data["isbn"]);
    $judul = htmlspecialchars($data["judul"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $penerbit = htmlspecialchars($data["penerbit"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query update data
    $query = "UPDATE books SET isbn = '$isbn', judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', gambar = '$gambar' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>