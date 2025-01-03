$(document).ready(function(){
    $('#upload-form').submit(function(e){
        e.preventDefault(); // Mencegah form dikirim secara default

        var formData = new FormData(this); // Mengambil data dari form, termasuk file yang dipilih

        $.ajax({
            type: 'POST',
            url: 'upload_multi_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response); // Menampilkan hasil respons dari server
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});
