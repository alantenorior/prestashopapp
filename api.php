<?php
// api.php
function apiRequest($endpoint, $method = 'GET', $data = null) {
    $url = "http://192.168.0.122/api/$endpoint";
    $apiKey = '6SJXRZB736468QD8XYKP3YE4VGYTZ1W2';  // API Key

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ':');  // Autenticación usando API Key
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    if ($method == 'POST' || $method == 'PUT') {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    } elseif ($method == 'DELETE') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    }

    $response = curl_exec($ch);
    
    if(curl_errno($ch)) {
        die("Error de cURL: " . curl_error($ch));
    }
    
    curl_close($ch);

    return json_decode($response, true);
}
?>
