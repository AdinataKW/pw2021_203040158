<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>
 <!DOCTYPE html>
 <html>
 <head>
     <title>Latihan function</title>
 </head>
 <body>
     <h1><?= salam("Pagi", "Adinata"); ?></h1>
 </body>
 </html>