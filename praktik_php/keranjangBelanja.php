<html>
<head>
    <title>Keranjang Belanja</title>
</head>
<body>
    <h2>Keranjang Belanja</h2>

    <?php
    // Mengambil nilai dari cookie dan menampilkannya
    if (isset($_COOKIE['beliNovel']) && isset($_COOKIE['beliBuku'])) {
        $beliNovel = $_COOKIE['beliNovel'];
        $beliBuku = $_COOKIE['beliBuku'];

        echo "Jumlah Novel: " . $beliNovel . "<br>";
        echo "Jumlah Buku: " . $beliBuku . "<br>";
    } else {
        echo "Belum ada barang yang dibeli.";
    }
    ?>

</body>
</html>
