<!DOCTYPE html>
<html>

<head>
    <title>Multi Upload Gambar</title>
</head>

<body>
    <h2>Unggah Gambar</h2>
    <form id="upload-form" action="upload_multi_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" id="files" multiple="multiple" accept="image/*">
        <input type="submit" name="submit" value="Unggah">
    </form>
    <div id="status"></div>

    <script src="jquery-3.7.0.min.js"></script>
    <script src="upload_multi.js"></script>
</body>

</html>
