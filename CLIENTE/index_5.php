<?php
// Chamar um Endpoint da API através do cURL (Client URL) com o protocolo HTTP e o método (verb) POST

// FORMATO POST

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost/tl/UC9/test_api_1/add_new_client_json/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    // CURLOPT_HTTP_VERSION => CURLOPT_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{"new_client":"João Silva"}', //Formato JSON
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;

?>