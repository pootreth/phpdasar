<?php
// Perulangan
// for
// while
// do.. while
// foreach : perulangan khusus array

// for($i = 0; $i<5; $i++){
//     echo "hello world! <br> ";
// }
// isinya ada 3 bagian: inisialisasi(init var), kondisi terminasi (stop perulangan), increment/decrement

// $i=0;
// while($i<5){
//     echo "hello world! <br> ";
//     $i++;
// }

// minimal dikerjakan sekali meski false
// $i=10;
// do {
//  echo "hello world! <br>";
//  $i++;
// } while($i<5);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 1</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
<!-- buat tabel -->
<table border="1" cellpadding="10" cellspacing="0">
    <!-- manual -->
    <!-- <tr>
        <td>1,1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr> -->

    <!-- with PHP -->
    <!-- 1 -->
    <!-- uncomment lalu hapus '/' sblm ?php untuk menghilangkan mengaktifkan tag php -->
    <!-- </?php
        for($i=1; $i<=3; $i++){
            echo "<tr>";
            for ($j=1; $j<=5; $j++){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }
    ?> -->

    <!-- 2 -->
    <?php for($i=1; $i<=5; $i++) : ?>
        <!-- logic warna baris -->
        <?php if( $i %2 == 1 ): ?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for ($j=1; $j<=5; $j++) : ?>
                <td>
                    <?= "$i,$j"; ?>
                    <!-- '=' sama dengan php echo -->
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>