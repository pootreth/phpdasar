<?php
// $mahasiswa=[
//     ["Yemima Sutanto", "160817006", "Teknik Informatika", "yemima.17051@mhs.its.ac.id"],
//     ["Elkana Hans", "05111740000127", "Teknik Informatika", "hans.17051@mhs.its.ac.id"],
//     ["Patrick Sungkharisma", "05111740000041", "Teknik Informatika", "patrick.17051@mhs.its.ac.id"],
// ];

// Array Asosiatif
// definisi sama dengan array numerik, bedanya
// key-nya adalah string yang kita buat sendiri

$mahasiswa=[
    [
        "nama" => "Yemima Sutanto",
        "nrp" => "160817006",
        "jurusan" => "Teknik Informatika",
        "email" => "yemima.17051@mhs.its.ac.id",
        "gambar" => "yemima.jpg"
    ],

    [
        "nama" => "Elkana Hans",
        "nrp" => "05111740000127",
        "jurusan" => "Teknik Informatika",
        "email" => "hans.17051@mhs.its.ac.id",
        "tugas" => [90,80,100],
        "gambar" => "hans.jpg"
    ]
    
];
// echo $mahasiswa[1]["email"];
// echo "<br>";
// echo $mahasiswa[1]["tugas"][1];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<!-- Jika mahasiswa lebih dari 1 (array multi dimensi) -->
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama: <?= $mhs["nama"];?></li>
        <li>NRP: <?= $mhs["nrp"];?></li>
        <li>Jurusan: <?= $mhs["jurusan"];?></li>
        <li>Email: <?= $mhs["email"];?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>