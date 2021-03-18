<?php
$books = ["gambar" => "bulan.jpg"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            font-size: 16px;
            line-height: 1.5;
            font-family: sans-serif;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            background-color: #222;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.025) 10%, transparent 0), linear-gradient(#222, #000);
            background-size: .75em 100%, 100% 100%;
            background-attachment: fixed;
            align-items: center;
        }

        h1 {
            display: block;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .wrapper {
            position: relative;
            flex-grow: 1;
            margin: auto;
            max-width: 1200px;
            max-height: 1200px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(4, 1fr);
            grid-gap: 2vmin;
            justify-items: center;
            align-items: center;
            border: 2px dashed black;
        }

        img {
            z-index: 1;
            grid-column: span 2;
            max-width: 100%;
            max-height: 100%;
            margin-bottom: -52%;
            transition: all .25s;
            background-size: cover;
            cursor: pointer;
        }

        img:nth-child(7n + 1) {
            grid-column: 2 / span 2;
        }

        img:hover {
            z-index: 2;
            transform: scale(2);
        }
    </style>
</head>

<body>

    <h1>Best Seller Novel April 2020</h1>
    <a href="login.php">Logout</a>

    <div class="wrapper">
        <img src="../img/1.jpg">
        <img src="../img/2.jpg">
        <img src="../img/3.jpg">
        <img src="../img/4.jpg">
        <img src="../img/5.jpg">
        <img src="../img/6.jpg">
        <img src="../img/7.jpg">
        <img src="../img/8.jpg">
        <img src="../img/9.jpg">
        <img src="../img/10.jpg">


    </div>


</body>

</html>