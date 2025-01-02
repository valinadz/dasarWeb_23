<!DOCTYPE html>
<html>
<head>
    <title>Form Lanjut dengan PHP</title>
</head>
<body>
<h2>Form Lanjut</h2>
<form method="POST" action="proses_lanjut.php">
    <label for="buah">Pilih Buah:</label>
    <select name="buah" id="buah">
        <option value="apel">Apel</option>
        <option value="pisang">Pisang</option>
        <option value="mangga">Mangga</option>
        <option value="jeruk">Jeruk</option>
    </select>
    
    <br><br>

    <label>Pilih Warna Favorit:</label><br>
    <input type="checkbox" name="warna[]" value="merah"> Merah<br>
    <input type="checkbox" name="warna[]" value="biru"> Biru<br>
    <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

    <br>

    <label>Pilih Jenis Kelamin:</label><br>
    <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

    <br>

    <input type="submit" value="Submit">
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];

    if (isset($_POST['warna'])) {
        $selectedWarna = $_POST['warna'];
    } else {
        $selectedWarna = []; // Jika tidak ada warna yang dipilih, inisialisasi sebagai array kosong
    }

    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    // Menampilkan hasil
    echo "Anda memilih buah: " . htmlspecialchars($selectedBuah) . "<br>";

    if (!empty($selectedWarna)) {
        echo "Warna favorit Anda: " . htmlspecialchars(implode(", ", $selectedWarna)) . "<br>";
    } else {
        echo "Anda tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . htmlspecialchars($selectedJenisKelamin);
}
?>
