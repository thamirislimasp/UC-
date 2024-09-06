<?php
$json = '["João", "Ana", "Carlos", "Martin"]';
$nome = json_decode ($json);

echo '<pre>';

print_r($nome);

?>