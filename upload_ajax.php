<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $extensions = array("pdf", "doc", "docx", "txt");

    // Memeriksa ekstensi file
    if (in_array($file_ext, $extensions) === false) {
        $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, DOCX, atau TXT.";
    }

    // Memeriksa ukuran file
    if ($file_size > 2097152) {
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    // Jika tidak ada kesalahan, lanjutkan untuk mengunggah file
    if (empty($errors) == true) {
        if (move_uploaded_file($file_tmp, "documents/" . $file_name)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Terjadi kesalahan saat memindahkan file.";
        }
    } else {
        // Tampilkan pesan kesalahan jika ada
        echo implode(" ", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
