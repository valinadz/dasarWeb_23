<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";  // Ganti dengan nama database Anda

$connect = mysqli_connect($host, $username, $password, $dbname);

if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
