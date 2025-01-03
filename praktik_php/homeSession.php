<html>
<head>
</head>
<body>
<?php
session_start(); // Memulai session

if ($_SESSION['status'] == 'login') { // Memeriksa apakah status login ada dalam session
    echo "Selamat datang " . $_SESSION['username']; // Menampilkan username yang login
?>
<br> <a href="sessionLogout.php">Log Out</a>
<?php
} else {
    echo "Anda belum login. Silahkan <a href='sessionLoginForm.html'>Log In</a>";
}
?>
</body>
</html>
