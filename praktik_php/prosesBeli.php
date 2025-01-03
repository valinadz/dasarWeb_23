<?php
if (isset($_POST["beliNovel"]) && isset($_POST["beliBuku"])) {
    setcookie("beliNovel", $_POST["beliNovel"], time() + 3600);  // Cookie untuk jumlah novel
    setcookie("beliBuku", $_POST["beliBuku"], time() + 3600);    // Cookie untuk jumlah buku teks

    // Redirect ke keranjangBelanja.php setelah cookie diset
    header("location: keranjangBelanja.php");
}
?>
