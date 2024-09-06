<?php
$dados['Brinquedos'] = [
    'Balão Mágico',
    'Carros de Corrida',
    'Bonecas',
    'Carteádos',
    'Tabuleiros'
];

echo '<pre>';

echo json_encode ($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>