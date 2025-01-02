<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama :</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email :</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password :</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="response"></div> <!-- Tempat untuk menampilkan hasil respon dari server -->

    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); // Mencegah pengiriman form secara default

            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;
            $("#nama-error").text(""); // Reset error
            $("#email-error").text(""); // Reset error
            $("#password-error").text(""); // Reset error

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!validateEmail(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            }

            // Validasi Password
            if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            }

            // Jika validasi berhasil, kirim data menggunakan AJAX
            if (valid) {
                $.ajax({
                    type: "POST",
                    url: "proses_validasi.php",
                    data: { nama: nama, email: email, password: password },
                    success: function(response) {
                        $("#response").html(response); // Tampilkan respon dari server
                    },
                    error: function() {
                        $("#response").html("Terjadi kesalahan saat mengirim data.");
                    }
                });
            }
        });

        // Fungsi untuk validasi email menggunakan regex
        function validateEmail(email) {
            var re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return re.test(String(email).toLowerCase());
        }
    });
    </script>
</body>
</html>
