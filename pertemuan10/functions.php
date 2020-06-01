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
    $isbn = $data["isbn"];
    $judul = $data["judul"];
    $penulis = $data["penulis"];
    $penerbit = $data["penerbit"];
    $gambar = $data["gambar"];

    // query insert data
    $query = "INSERT INTO books VALUES (NULL,'$isbn','$judul','$penulis','$penerbit','$gambar')" ;
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>