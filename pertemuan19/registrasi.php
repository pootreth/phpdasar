<?php 
require 'functions.php';

    if( isset($_POST["daftar"])){
        if ( daftar($_POST)>0){
            echo "<script>
                alert('Akun berhasil terbuat!');
            </script>";
            header("Location: index.php");
            exit;
        }else{
            echo mysqli_error($db);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>

<h2>Buat Akun Baru</h2>

<form action="" method="POST">
    <label for="name">Nama</label>
    <input type="text" name="name" id="name" autocomplete="off"><br><br>

    <label for="username">Username</label>
    <input type="text" name="username" id="username" autocomplete="off"><br><br>

    <label for="password">Password</label>
    <input type="password" name="password" id="password"><br><br>

    <label for="password2">Konfirmasi Password</label>
    <input type="password" name="password2" id="password2"><br><br>

    <button type="submit" name="daftar">Daftar</button>
</form>
    
</body>
</html>