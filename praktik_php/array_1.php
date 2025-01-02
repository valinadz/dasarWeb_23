<!DOCTYPE html>
<html>
<head>
    <title>Array dengan Perulangan foreach</title>
</head>
<body>
    <h2>Array Terindeks Menggunakan Perulangan foreach</h2>
    <?php

    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

    foreach ($Listdosen as $dosen) {
        echo $dosen . "<br>";
    }
    ?>
</body>
</html>
