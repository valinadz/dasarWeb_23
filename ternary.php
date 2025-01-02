<?php
// Poin yang dikumpulkan oleh pemain
$poin = 550; // Misalnya pemain memiliki 550 poin

// Menggunakan operator ternary untuk menentukan apakah pemain mendapatkan hadiah tambahan
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

// Menampilkan hasil
echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>
