<?php
// Date/Time
// Date
// echo date("l, d-M-Y");
// output : Sunday, 31-May-2020
// d tgl angka, l hr full, D hari singkat, m bln angka, M bln alpabet
// sisanya cek dokumentasi php

// Time
// UNIX Timestamp / EPOCH Time
// Detik yang sudah berlalu sejak 1 Januari 1970 sampai saat ini
// echo time();
// echo date("l", time()+172800);
// stlh '+', operasi matematika untuk tau hari kedepan, kalo hari kebelakang, ganti '+' jadi '-'
// echo " ";
// echo date("d M Y", time()-172800);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// mencari tahu hari dari suatu tgl (lahir)
// echo date("l", mktime(0,0,0,3,28,1999));

// strtotime
// kebalikan mktime, masukin format tanggal, outputnya detik
// echo strtotime("28 mar 1999");
echo date("l", strtotime("28 march 1999"));

// String
// strlen() menghitung panjang dari sebuah string
// strcmp() menggabungkan dua buah string
// explode() memecah sebuah string menjadi array
// htmlspecialchars() fungsi khusus untuk menjaga web dr hacker

// Utility
// var_dump() mencetak isi dari sebuah var, array
// isset() mengecek sebuah var udah pernah kebikin apa blm. nilainya bool
// empty() mengecek apakah sebuah var itu ada isinya apa ga
// die() stop program
// sleep() untuk memberhentikan sementara sebuah program, contoh sleep(10);
?>