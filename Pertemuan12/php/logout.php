<!-- 
    NAMA : Adinata K W
    NPM : 203040158
    Kelas : D
    Github : https://github.com/AdinataKW
    MataKuliah : Pemrograman Web
 -->

 <?php 
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>