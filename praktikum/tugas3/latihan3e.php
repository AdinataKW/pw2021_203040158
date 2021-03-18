<?php
/*
    Adinata Kusuma Wardani
    203040158
    Jumat,13.00
*/
?>

<?php 
$books = [
    [
        "Judul" => "Awaken The Giant within",
        "Pengarang" => "Anthony Robbins",
        "Terbit" => "1992",
        "Dimensi" => "654 halaman",
        "ISBN" => "-",
        "img" => "1.png"
    ],
    [
        "Judul" => "Think and Grow Rich",
        "Pengarang" => "Napoleon Hill",
        "Terbit" => "1937",
        "Dimensi" => "420 Halaman",
        "ISBN" => "-",
        "img" => "2.png"
    ],
    [
        "Judul" => "The 7 Habit of Highly Effective people",
        "Pengarang" => "Steven R.Covey",
        "Terbit" => "1898",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "3.png"
    ],
    [
        "Judul" => "The Magic of Thinking Big",
        "Pengarang" => "David J.Schawartz",
        "Terbit" => "-",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "4.png"
    ],
    [
        "Judul" => "How To Win Friends and Influence People",
        "Pengarang" => "Dale Carnegie",
        "Terbit" => "-",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "5.png"
    ],
    [
        "Judul" => "The Power of Positive Thinking",
        "Pengarang" => "Norman Vincent Peale",
        "Terbit" => "-",
        "Dimensi" => "-",
        "ISBN" => "-",
        "gambar" => "6.png"
    ],
    [
        "Judul" => "The Science of Getting Rich",
        "Pengarang" => "Wallace D.Wattles",
        "Terbit" => "-",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "7.png"
    ],
    [
        "Judul" => "As A Man Thinketh",
        "Pengarang" => "James Allen",
        "Terbit" => "1903",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "8.png"
    ],
    [
        "Judul" => "Outliers The Story of Success",
        "Pengarang" => "Malcolm Gladwell",
        "Terbit" => "2008",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "9.png"
    ],
    [
        "Judul" => "Rich Dad Poor Dad",
        "Pengarang" => "Robert Kiyosaki",
        "Terbit" => "-",
        "Dimensi" => "-",
        "ISBN" => "-",
        "img" => "10.png"
    ]
];
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
<div class="float-md-start">
<table class="table table-bordered table-striped table-hover text-center">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Terbit</th>
      <th scope="col">Dimensi</th>
      <th scope="col">ISBN</th>
    </tr>
  </thead>
  <tbody>
    <?php $i = 1 ?>
    <?php foreach($books as $book) : ?>
    <tr>
      <th scope="row"><?= $i ?></th>
      <td><img src="img/<?= $book["img"]; ?>"></td>
      <td><?= $book["Judul"] ?></td>
      <td><?= $book["Pengarang"] ?></td>
      <td><?= $book["Terbit"] ?></td>
      <td><?= $book["Dimensi"] ?></td>
      <td><?= $book["ISBN"] ?></td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
</body>
</html>