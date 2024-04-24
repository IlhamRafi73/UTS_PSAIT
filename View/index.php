<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Nilai Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-3">Daftar Nilai Mahasiswa</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Alamat</th>
                        <th>Mata Kuliah</th>
                        <th>Nilai</th>
                        <th>Action</th> <!-- Kolom tambahan untuk tombol delete -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $api_url = "http://localhost/uts_api/API/sait_uts.php";
                    $data = json_decode(file_get_contents($api_url), true);
                    if ($data['status'] == 1) {
                        foreach ($data['data'] as $row) {
                            echo "<tr>";
                            echo "<td>".$row['nim']."</td>";
                            echo "<td>".$row['nama']."</td>";
                            echo "<td>".$row['alamat']."</td>";
                            echo "<td>".$row['nama_mk']."</td>";
                            echo "<td>".$row['nilai']."</td>";
                            // Tambahkan tombol delete dengan URL delete_process.php dan parameter nim & kode_mk
                            echo "<td><a href='delete_process.php?nim=".$row['nim']."&kode_mk=".$row['kode_mk']."' class='btn btn-danger btn-sm'>Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Data tidak tersedia</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="mt-3">
            <h3>Menu:</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="insert.php">Tambah Nilai Baru</a></li>
                <li class="list-group-item"><a href="update.php">Update Nilai</a></li>
            </ul>
        </div>
    </div>
</body>
</html>
