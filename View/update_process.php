<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $kode_mk = $_POST['kode_mk'];
    $nilai = $_POST['nilai'];

    $data = array(
        'nilai' => $nilai
    );

    $api_url = "http://localhost/uts_api/API/sait_uts.php?nim=$nim&kode_mk=$kode_mk";
    $options = array(
        'http' => array(
            'method'  => 'PUT',
            'header'  => 'Content-type: application/json',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);

    if ($result === FALSE) {
        echo "Gagal mengupdate data.";
    } else {
        echo "Data berhasil diupdate.";
    }
}
?>
