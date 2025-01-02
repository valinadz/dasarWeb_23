<?php
$nilaiNumerik = 92; // Nilai numerik

// Struktur kontrol untuk menentukan nilai huruf
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
} else {
    echo "Nilai tidak valid.";
}

// Variabel
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

// Perulangan untuk menghitung jumlah hari
while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

// Menampilkan hasil
echo "<h3>Perhitungan Jarak Atlet</h3>";
echo "Jarak target: $jarakTarget km<br>";
echo "Peningkatan harian: $peningkatanHarian km/hari<br>";
echo "Atlet tersebut memerlukan <strong>$hari hari</strong> untuk mencapai jarak $jarakTarget kilometer.";

// Variabel
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

// Perulangan untuk menghitung jumlah buah
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

// Menampilkan hasil
echo "<h3>Perhitungan Jumlah Buah yang Akan Dipanen</h3>";
echo "Jumlah lahan: $jumlahLahan<br>";
echo "Jumlah tanaman per lahan: $tanamanPerLahan<br>";
echo "Jumlah buah per tanaman: $buahPerTanaman<br>";
echo "Jumlah buah yang akan dipanen adalah: <strong>$jumlahBuah buah</strong>";

// Array untuk skor ujian
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

// Perulangan untuk menghitung total skor
foreach ($skorUjian as $skor) {
    $totalSkor += $skor; // Menambahkan skor tiap ujian ke total
}

// Menampilkan hasil
echo "<h3>Total Skor Ujian</h3>";
echo "Skor ujian: " . implode(", ", $skorUjian) . "<br>";
echo "Total skor ujian adalah: <strong>$totalSkor</strong><br><br>";

// Array untuk nilai siswa
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

// Menampilkan status kelulusan siswa
echo "<h3>Status Kelulusan Siswa</h3>";
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue; // Jika nilai kurang dari 60, siswa tidak lulus dan lanjut ke iterasi berikutnya
    }
    echo "Nilai: $nilai (Lulus) <br>"; // Jika nilai lebih atau sama dengan 60, siswa lulus
}
?>