<?php
// Edição 


$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://localhost/tl/UC9/test_api_1/update_client/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    // CURLOPT_HTTP_VERSION => CURLOPT_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'PUT', //Alteração do dado
    CURLOPT_POSTFIELDS => '{"id":12, "new_name":"Thamiris"}', //Formato JSON
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
));
$response = curl_exec($curl);
curl_close($curl);
echo $response;

?>