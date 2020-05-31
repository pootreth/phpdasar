<?php
$mahasiswa=[
    ["Yemima Sutanto", "160817006", "Teknik Informatika", "yemima.17051@mhs.its.ac.id"],
    ["Elkana Hans", "05111740000127", "Teknik Informatika", "hans.17051@mhs.its.ac.id"],
    ["Patrick Sungkharisma", "05111740000041", "Teknik Informatika", "patrick.17051@mhs.its.ac.id"],
];
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
    <!-- <ul> -->
        <!-- 1 -->
        <!-- <php foreach ($mahasiswa as $mhs) : ?>
            <li><= $mhs ?></li>
        <php endforeach; ?> -->

        <!-- 2 -->
        <!-- <li><= $mahasiswa[0];?></li>
        <li><= $mahasiswa[1];?></li>
        <li><= $mahasiswa[2];?></li>
        <li><= $mahasiswa[3];?></li> -->
    <!-- </ul> -->

<!-- Jika mahasiswa lebih dari 1 (array multi dimensi) -->
<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0];?></li>
        <li>NRP: <?= $mhs[1];?></li>
        <li>Jurusan: <?= $mhs[2];?></li>
        <li>Email: <?= $mhs[3];?></li>
    </ul>
<?php endforeach; ?>
</body>
</html>