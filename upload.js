$(document).ready(function() {
    // Ketika ada perubahan pada input file
    $('#file').change(function() {
        if (this.files.length > 0) {
            // Aktifkan tombol unggah jika ada file yang dipilih
            $('#upload-button').prop('disabled', false).css('opacity', 1);
        } else {
            // Nonaktifkan tombol unggah jika tidak ada file yang dipilih
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
        }
    });

    // Menangani submit form menggunakan AJAX
    $('#upload-form').submit(function(e) {
        e.preventDefault(); // Mencegah pengiriman form secara default

        var formData = new FormData(this); // Mengambil data form, termasuk file

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); // Tampilkan status di div #status
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
