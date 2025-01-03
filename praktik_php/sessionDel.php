<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html>
<body>

<?php
session_unset();  // Menghapus semua variabel session
session_destroy();  // Menghancurkan session

echo "All session variables are now removed, and the session is destroyed."; // Menampilkan pesan
?>

</body>
</html>
