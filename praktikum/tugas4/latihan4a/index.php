<?php
/*
    Adinata Kusuma Wardani
    203040158
    Jumat,13.00
*/
?>

<?php 
   require 'php/functions.php';
   $books = query("SELECT * FROM books")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3e</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
  <?php foreach ($books as $book) : ?>
         <a href ="php/detail.php?id=<?= $book['id']  ?>">
             <img src="assets/img/<?= $book["img"] ?>"> 
         </a>      
  <?php endforeach; ?>
</body>
</html>