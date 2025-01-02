<?php
// Harga produk
$hargaProduk = 120000;
$diskon = 20; // Diskon 20%

// Mengecek apakah harga produk lebih dari Rp 100.000
if ($hargaProduk > 100000) {
    // Menghitung diskon yang diterima
    $jumlahDiskon = ($diskon / 100) * $hargaProduk;
    // Menghitung harga setelah diskon
    $hargaAkhir = $hargaProduk - $jumlahDiskon;
    echo "Harga produk setelah diskon adalah: <strong>Rp " . number_format($hargaAkhir, 0, ',', '.') . "</strong>";
} else {
    echo "Harga produk tidak memenuhi syarat untuk diskon.";
}
?>
