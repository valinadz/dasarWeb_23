<?php
include "koneksi.php";  // Pastikan file koneksi.php sudah ada di folder yang sama

$username = $_POST['username'];  // Mengambil username dari form
$password = md5($_POST['password']);  // Mengambil dan mengenkripsi password menggunakan md5

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";  // Query untuk memeriksa username dan password
$result = mysqli_query($connect, $query);  // Menjalankan query
$cek = mysqli_num_rows($result);  // Mengecek apakah ada data yang cocok

if ($cek) {
    echo "Anda berhasil login. Silahkan menuju "; ?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php
} else {
    echo "Anda gagal login. Silahkan "; ?>
    <a href="loginForm.html">Login kembali</a>
    <?php
    echo mysqli_error($connect);  // Menampilkan error jika query gagal
}
?>
