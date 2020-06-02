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
    // $gambar = htmlspecialchars($data["gambar"]);

    $gambar = upload();
    if ( !$gambar ){
        return false;
    }

    // query insert data
    $query = "INSERT INTO books VALUES (NULL,'$isbn','$judul','$penulis','$penerbit','$gambar')" ;
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada file yg diupload apa tidak
    if ( $error === 4){
        echo "<script>
                alert('Upload file terlebih dahulu!');
            </script>";
        return false;
    }

    // cek file valid/ga
    $extfile = ['jpg', 'jpeg', 'png'];
    $extgambar = explode('.', $namaFile);
    $extgambar = strtolower(end($extgambar));

    if ( !in_array($extgambar, $extfile)){
        echo "<script>
                alert('File yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek ukuran file
    if ( $ukuranFile > 1000000){
        echo "<script>
                alert('Ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extgambar;
    // var_dump($namaFileBaru); die;

    // lolos pengecelan dan file diupload
    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
    
    return $namaFileBaru;
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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah gambar diupdate apa ga
    if ( $_FILES['gambar']['error']===4 ){
        $gambar = $gambarLama;
    }else{
        $gambar = upload();
    }

    // query update data
    $query = "UPDATE books SET isbn = '$isbn', judul = '$judul', penulis = '$penulis', penerbit = '$penerbit', gambar = '$gambar' WHERE id = $id";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

?>