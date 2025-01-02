<?php
// Array dua dimensi untuk daftar siswa dan nilai mereka
$daftarNilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

// Menghitung total nilai dan jumlah siswa
$totalNilai = 0;
$jumlahSiswa = count($daftarNilaiSiswa);

// Perulangan untuk menghitung total nilai
foreach ($daftarNilaiSiswa as $siswa) {
    $totalNilai += $siswa[1]; // Menambahkan nilai setiap siswa ke total
}

// Menghitung rata-rata nilai kelas
$rataRata = $totalNilai / $jumlahSiswa;

// Menampilkan rata-rata kelas
echo "Rata-rata nilai kelas adalah: $rataRata <br><br>";

// Menampilkan daftar siswa yang nilainya di atas rata-rata kelas
echo "Daftar siswa yang nilainya di atas rata-rata kelas: <br>";
foreach ($daftarNilaiSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo "Nama: {$siswa[0]}, Nilai: {$siswa[1]} <br>";
    }
}
?>
