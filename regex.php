<?php

$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!<br>";
}

// Kode untuk mencocokkan digit
$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

// Kode untuk mengganti 'apple' dengan 'banana'
$pattern = '/apple/'; 
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>"; // Output: "I like banana pie."

// Kode tambahan untuk mencocokkan 'god', 'good', 'gooood', dll.
// Menggunakan '{n,m}' untuk mencocokkan 'g' diikuti oleh 'o' yang muncul 1 hingga 2 kali, diakhiri dengan 'd'
$pattern = '/go{1,2}d/'; // Cocokkan "god" atau "good"
$text = 'god is good and gooood.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
?>
