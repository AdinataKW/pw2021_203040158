<?php
/*
    Adinata Kusuma Wardani
    203040158
    Jumat,13.00
*/
?>

<?php 
$names = [
    "Cristiano Ronaldo" => "Juventus",
    "Lionel Messi" => "Barcelona",
    "Luca Modric" => "Real Madrid",
    "Mohammad Salah" => "Liverpool",
    "Neymar Jr" => "Paris Saint Germain",
    "Sadio Mane" => "Liverpool",
    "Zlatan Ibrahimovic" => "Ac Milan"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
    <style>
        .wrapper {
            border: 2px solid black;
        }
        table,th,td {
            border-collapse:collapse;
        }
        th,td {
            padding:15px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="wrapper">
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
        <table>
        <?php foreach($names as $name => $club) : ?>
            <tr>
                <td><b><?= "$name" ?></b></td>
                <td><?= "<b>:</b> $club" ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>