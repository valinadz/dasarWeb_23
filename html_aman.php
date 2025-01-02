<?php
// Menangkap data input dari form
$input = isset($_POST['input']) ? $_POST['input'] : '';
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

// Menangkap dan memeriksa email
$email = isset($_POST['email']) ? $_POST['email'] : '';
$emailValid = false;

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailValid = true; // Email valid
} else {
    // Tangani input yang tidak valid (misalnya, set pesan error)
    $emailError = "Email yang dimasukkan tidak valid.";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Aman</title>
</head>
<body>

<!-- Form untuk mengirim data -->
<form method="post" action="">
    <label for="input">Masukkan Data:</label>
    <input type="text" name="input" id="input" required>
    <br>
    <label for="email">Masukkan Email:</label>
    <input type="email" name="email" id="email" required>
    <button type="submit">Kirim</button>
</form>

<?php
// Menampilkan data yang sudah diproses
if ($input) {
    echo "<h3>Data yang Anda masukkan:</h3>";
    echo "<p>" . $input . "</p>";
}

// Menampilkan hasil validasi email
if ($emailValid) {
    echo "<h3>Email yang Anda masukkan:</h3>";
    echo "<p>" . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
} elseif (isset($emailError)) {
    echo "<h3>Error:</h3>";
    echo "<p>" . htmlspecialchars($emailError, ENT_QUOTES, 'UTF-8') . "</p>";
}
?>

</body>
</html>
