<?php
// Data jumlah kursi dan kursi yang terisi
$totalKursi = 45;
$kursiTerisi = 28;

// Menghitung jumlah kursi yang kosong
$kursiKosong = $totalKursi - $kursiTerisi;

// Menghitung persentase kursi yang kosong
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

// Menampilkan hasil
echo "<h3>Perhitungan Kursi Kosong</h3>";
echo "Total kursi: $totalKursi<br>";
echo "Kursi terisi: $kursiTerisi<br>";
echo "Kursi kosong: $kursiKosong<br>";
echo "Persentase kursi yang kosong: " . round($persentaseKosong, 2) . "%<br>";
?>
