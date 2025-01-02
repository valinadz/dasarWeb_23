<?php
// Array nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// Mengurutkan array nilai
sort($nilaiSiswa);

// Menghapus dua nilai terendah dan dua nilai tertinggi
array_shift($nilaiSiswa); // Menghapus nilai terendah pertama
array_shift($nilaiSiswa); // Menghapus nilai terendah kedua
array_pop($nilaiSiswa); // Menghapus nilai tertinggi pertama
array_pop($nilaiSiswa); // Menghapus nilai tertinggi kedua

// Menghitung total nilai setelah penghapusan
$totalNilai = array_sum($nilaiSiswa);

// Menampilkan hasil
echo "Nilai siswa setelah mengabaikan dua nilai tertinggi dan terendah: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai yang digunakan untuk rata-rata: <strong>$totalNilai</strong>";
?>
