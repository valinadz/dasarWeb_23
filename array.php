<?php
// Array nilai siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

// Array untuk menyimpan nilai siswa yang lulus
$nilaiLulus = [];

// Perulangan untuk memeriksa setiap nilai siswa
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        // Menambahkan nilai siswa yang lulus ke dalam array $nilaiLulus
        $nilaiLulus[] = $nilai;
    }
}

// Menampilkan daftar nilai siswa yang lulus
echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus) . "<br><br>";

// Daftar karyawan dan pengalaman mereka dalam tahun
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6]
];

// Array untuk menyimpan nama karyawan yang memiliki pengalaman lebih dari 5 tahun
$karyawanPengalamanLimaTahun = [];

// Perulangan untuk memeriksa setiap karyawan
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {  // Jika pengalaman lebih dari 5 tahun
        $karyawanPengalamanLimaTahun[] = $karyawan[0];  // Menambahkan nama karyawan ke dalam array
    }
}

// Menampilkan daftar karyawan dengan pengalaman lebih dari 5 tahun
echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun) . "<br><br>";

// Array daftar nilai mahasiswa
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ]
];

// Menentukan mata kuliah yang akan ditampilkan
$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

// Perulangan untuk menampilkan daftar nilai dalam mata kuliah yang ditentukan
foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
?>
