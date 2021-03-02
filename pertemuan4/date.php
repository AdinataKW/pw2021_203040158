<?php
/*
Adinata Kusuma Wardani
203040158
https://github.com/AdinataKW/pw2021_203040158
Pertemuan 2 - 1 Maret 2021
Mempelajari Function
*/

// date 
// untuk menampilkan tanggal dengan format tertentu
//     echo date("l, d-M-Y");

// Time
// Unix TimeStamp / EPOCH time
// Detik yang sudah berlalu sejak 1 January 1970 
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0,)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,8,25,1985));

// strtotime
echo date("l", strtotime("25 aug 1985"));
?>