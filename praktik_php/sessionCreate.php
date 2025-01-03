<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Menetapkan beberapa variabel session
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

// Menampilkan pesan bahwa session telah di-set
echo "Session variables are set.";
?>

</body>
</html>
