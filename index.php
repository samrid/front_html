<?php
$config = include('config.php');

$url = $config['api_url'] . '?key=' . $config['api_key'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo 'Response: ' . $response;
}
echo '<h1>HELLO WORLD</h1>';
curl_close($ch);
?>
