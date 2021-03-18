<?php
/*
    Adinata Kusuma Wardani
    203040158
    Jumat,13.00
*/
?>

<?php
$names = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi
", "Zlatan Ibrahimovic", "Neymar Jr"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3b</title>
    <style>
        .wrapper {
            border: 2px solid black;
        }
    </style>
</head>
<body>
<div class="wrapper">
<h3>Daftar pemain bola terkenal</h3>
<ol>
    <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
    <?php endforeach; ?>
</ol>

<?php
$names[] = "Luca Modric";
$names[] = "Sadio Mane";
sort($names);
?>

<h3>Daftar pemain bola terkenal baru</h3>
<ol>
    <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
    <?php endforeach; ?>
</ol>
</div>

</body>