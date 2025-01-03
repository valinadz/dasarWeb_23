<?php
include "koneksi.php";  // Pastikan file koneksi.php ada di folder yang sama

$username = $_POST['username'];  // Mengambil username dari form
$password = md5($_POST['password']);  // Mengambil dan mengenkripsi password menggunakan md5

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";  // Query untuk memeriksa username dan password
$result = mysqli_query($connect, $query);  // Menjalankan query
$row = mysqli_fetch_assoc($result);  // Mengambil hasil query dalam bentuk associative array

if ($row['level'] == 1) {
    echo "Anda berhasil login. Silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php
} else if ($row['level'] == 2) {
    echo "Anda berhasil login. Silahkan menuju "; ?>
    <a href="homeGuest.html">Halaman HOME</a>
    <?php
} else {
    echo "Anda gagal login. Silahkan "; ?>
    <a href="loginForm.html">Login kembali</a>
    <?php
    echo mysqli_error($connect);  // Menampilkan error jika query gagal
}
?>
