<?php  
session_start();

if (!isset($_SESSION['login'])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';

// Ambil id dari URL
$id = $_GET['id'];

// Query mahasiswa berdasarkan id
$mhs = query("SELECT * FROM sepatu WHERE id = $id");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Sepatu</title>
</head>
<body>
	
	<h3>Detail Sepatu</h3>

	<ul>
		<li><img src="img/<?= $mhs['gambar']; ?>" width="150"></li>
		<li>Nama : <?= $mhs['nama']; ?></li>
		<li>Harga : <?= $mhs['harga']; ?></li>
		<li>Ukuran : <?= $mhs['ukuran']; ?></li>
		<li><a href="ubah.php?Id=<?= $mhs['Id']; ?>">ubah</a> | <a href="hapus.php?Id=<?= $mhs['Id']; ?>" onclick= "return confirm('apakah anda yakin?');">hapus</a></li>
		<li><a href="index.php">Kembali ke daftar sepatu</a></li>
	</ul>

</body>
</html>