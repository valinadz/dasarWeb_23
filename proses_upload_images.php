<?php
// Lokasi penyimpanan file gambar yang diunggah
$targetDirectory = "uploads/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true); // Membuat direktori jika belum ada
}

// Periksa apakah ada file yang diunggah
if (isset($_FILES['files']) && count($_FILES['files']['name']) > 0) {
    $totalFiles = count($_FILES['files']['name']); // Total file yang diunggah

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i]; // Nama file
        $fileTmpName = $_FILES['files']['tmp_name'][$i]; // Lokasi sementara file
        $fileSize = $_FILES['files']['size'][$i]; // Ukuran file
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); // Ekstensi file

        // Tentukan ekstensi file yang diperbolehkan
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        // Tentukan batas ukuran file (5 MB)
        $maxFileSize = 5 * 1024 * 1024;

        // Periksa apakah file memiliki ekstensi yang valid dan ukuran yang diperbolehkan
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxFileSize) {
            // Tentukan lokasi penyimpanan file
            $targetFile = $targetDirectory . basename($fileName);

            // Pindahkan file yang diunggah ke direktori tujuan
            if (move_uploaded_file($fileTmpName, $targetFile)) {
                echo "Gambar '$fileName' berhasil diunggah. <br>";
            } else {
                echo "Gagal mengunggah gambar '$fileName'. <br>";
            }
        } else {
            echo "Gambar '$fileName' tidak valid. Hanya file dengan ekstensi JPG, JPEG, PNG, GIF yang diizinkan dan ukuran maksimal 5 MB. <br>";
        }
    }
} else {
    echo "Tidak ada file gambar yang diunggah.";
}
?>
