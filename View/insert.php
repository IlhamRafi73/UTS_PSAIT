<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Nilai Mahasiswa</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Insert Nilai Mahasiswa</h2>
        <form action="insert_process.php" method="POST">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" class="form-control" id="nim" name="nim">
            </div>
            <div class="form-group">
                <label for="kode_mk">Kode MK:</label>
                <input type="text" class="form-control" id="kode_mk" name="kode_mk">
            </div>
            <div class="form-group">
                <label for="nilai">Nilai:</label>
                <input type="text" class="form-control" id="nilai" name="nilai">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
