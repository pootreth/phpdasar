<?php

$location = __DIR__ .'/pdf/';
require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$book = query("SELECT * FROM books");

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi Buku</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>Koleksi Buku</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>ISBN</th>
        </tr>';

        $i = 1;
       foreach( $book as $row ){
           $html .= '<tr>
           <td>'. $i++ .'</td>
           <td><img src="img/'. $row["gambar"] .'" width="75"></td>
           <td>'. $row["judul"] .'</td>
           <td>'. $row["penulis"] .'</td>
           <td>'. $row["penerbit"] .'</td>
           <td>'. $row["isbn"] .'</td>
       </tr>';
       }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);

$mpdf->Output($location . 'Koleksi Buku.pdf', \Mpdf\Output\Destination::FILE);

?>		