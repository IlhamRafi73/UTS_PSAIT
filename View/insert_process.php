<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_url = "http://localhost/uts_api/API/sait_uts.php";
    $data = array(
        "nim" => $_POST["nim"],
        "kode_mk" => $_POST["kode_mk"],
        "nilai" => $_POST["nilai"]
    );
    $options = array(
        'http' => array(
            'method' => 'POST',
            'header' => 'Content-Type: application/json',
            'content' => json_encode($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($api_url, false, $context);
    echo $result;
} else {
    header("HTTP/1.0 405 Method Not Allowed");
}
?>
