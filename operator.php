<?php
// Variabel
$a = 10;
$b = 5;

// Operasi Aritmatika
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// Menampilkan hasil operasi aritmatika
echo "<h3>Hasil Operasi Aritmatika</h3>";
echo "Nilai a: $a<br>";
echo "Nilai b: $b<br><br>";
echo "Penjumlahan (a + b): $hasilTambah<br>";
echo "Pengurangan (a - b): $hasilKurang<br>";
echo "Perkalian (a * b): $hasilKali<br>";
echo "Pembagian (a / b): $hasilBagi<br>";
echo "Sisa Bagi (a % b): $sisaBagi<br>";
echo "Pangkat (a ** b): $pangkat<br><br>";

// Operasi Perbandingan
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// Menampilkan hasil operasi perbandingan
echo "<h3>Hasil Operasi Perbandingan</h3>";
echo "Apakah a sama dengan b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak sama dengan b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil dari b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar dari b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih kecil atau sama dengan b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah a lebih besar atau sama dengan b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";

// Operasi Logika
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// Menampilkan hasil operasi logika
echo "<h3>Hasil Operasi Logika</h3>";
echo "Logika AND (a && b): " . ($hasilAnd ? "True" : "False") . "<br>";
echo "Logika OR (a || b): " . ($hasilOr ? "True" : "False") . "<br>";
echo "Logika NOT pada a (!a): " . ($hasilNotA ? "True" : "False") . "<br>";
echo "Logika NOT pada b (!b): " . ($hasilNotB ? "True" : "False") . "<br>";

// Operasi Penugasan
echo "<h3>Hasil Operasi Penugasan</h3>";
echo "Nilai awal a: 10<br>";
$a += $b;
echo "Hasil dari a += b: $a<br>";

$a -= $b;
echo "Hasil dari a -= b: $a<br>";

$a *= $b;
echo "Hasil dari a *= b: $a<br>";

$a /= $b;
echo "Hasil dari a /= b: $a<br>";

$a %= $b;
echo "Hasil dari a %= b: $a<br>";

// Operasi Identitas
$hasilIdentik = $a === $b; // Apakah $a sama nilai dan tipe dengan $b?
$hasilTidakIdentik = $a !== $b; // Apakah $a tidak sama nilai atau tipe dengan $b?

// Menampilkan hasil operasi identitas
echo "<h3>Hasil Operasi Identitas</h3>";
echo "Apakah a identik dengan b (a === b)? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah a tidak identik dengan b (a !== b)? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";
?>
