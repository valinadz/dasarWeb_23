<?php
session_start(); // Memulai sesi
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Menampilkan nilai session yang telah diset
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>

</body>
</html>
