<?php
if (isset($_POST["submit"])) {
    // Memeriksa apakah file diunggah
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] === 0) {
        $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Menentukan ekstensi file yang diperbolehkan
        $allowedExtensions = array("txt", "pdf", "doc", "docx");

        // Batasan ukuran file (10 MB)
        $maxFileSize = 10 * 1024 * 1024;

        // Validasi ekstensi dan ukuran file
        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            // Memindahkan file ke folder tujuan
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File berhasil diunggah. <br>";
                echo "Nama File: " . basename($_FILES["fileToUpload"]["name"]) . "<br>";
                echo "Ukuran File: " . ($_FILES["fileToUpload"]["size"] / 1024) . " KB<br>";
            } else {
                echo "Gagal mengunggah file.";
            }
        } else {
            if ($_FILES["fileToUpload"]["size"] > $maxFileSize) {
                echo "File terlalu besar. Maksimum ukuran file adalah 10 MB.<br>";
            } else {
                echo "Jenis file tidak valid. Hanya file dokumen dengan ekstensi TXT, PDF, DOC, DOCX yang diizinkan.<br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah atau terjadi kesalahan saat mengunggah file.";
    }
}
?>
