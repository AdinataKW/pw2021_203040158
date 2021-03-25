<?php 
    
    if (!isset($_GET['id'])) {
    	header("location: ../index.php");
    	exit;
    }

    require 'functions.php';
    $id = $_GET['id'];
    $books = query("SELECT * FROM books WHERE id = $id")[0];
?>
<!DOCTYPE html>
    <html>
    <head>
    	<title>4c</title>
    </head>
    <body>
       <img src="../assets/img/<?= $books["img"]; ?>">
       <p><?= $books["Judul"]; ?></p>
       <p><?= $books["Pengarang"]; ?></p>
       <p><?= $books["Terbit"]; ?></p>
       <p><?= $books["Dimensi"]; ?></p>
       <p><?= $books["ISBN"]; ?></p>

       <button class="tombil-kembali"><a href="../index.php">Kembali</a></button>
    </body>
    </html>    