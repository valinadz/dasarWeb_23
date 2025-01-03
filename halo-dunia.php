<?php
$nama = @$_GET['nama'];  // Mengambil nilai 'nama' dari query string
$usia = @$_GET['usia'];  // Mengambil nilai 'usia' dari query string

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
