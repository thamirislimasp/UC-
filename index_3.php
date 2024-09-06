<?php

// A função json_decode permite a operação contrária, ou seja, partindo de um JSON, deixando a coleção operável em PHP.

$json = '["João", "Ana", "Carlos", "Martin"]';
$nome = json_decode ($json);

echo '<pre>';

print_r($nome);

?>