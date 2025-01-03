<?php
include "koneksi.php"; // Pastikan file koneksi.php ada di folder yang sama

$username = $_POST['username']; // Mengambil input username
$password = md5($_POST['password']); // Mengambil dan mengenkripsi password dengan md5

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'"; // Query untuk memeriksa data
$result = mysqli_query($connect, $sql); // Menjalankan query
$cek = mysqli_num_rows($result); // Mengecek jumlah baris yang dikembalikan

if ($cek > 0) {
    session_start(); // Memulai session
    $_SESSION['username'] = $username; // Menyimpan username dalam session
    $_SESSION['status'] = 'login'; // Menyimpan status login dalam session

    echo "Anda Berhasil Login, silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
} else {
    echo "Gagal login, silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
    echo mysqli_error($connect); // Menampilkan error jika query gagal
}
?>
