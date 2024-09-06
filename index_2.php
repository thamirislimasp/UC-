<?php
// O JSON não está limitado a coleções simples.
// Podem ser coleções de dados bastante complexos.

$dados['status'] = 'sucesso';
$dados['result'] = true;
$dados['pessoas'] = ['João', 'Ana', 'Carlos', 'Fernando', 'Francisco', 'Silva'];
$dados['cidades'] = ['São Paulo', 'Rio de Janeiro', 'Fortaleza', 'Salvador'];
$dados['linguas'] = [
    'pt' => 'Português',
    'en' => 'Inglês',
    'fr' => 'Francês',
    'de' => 'Alemão',
    'es' => 'Espanhol'
];

$dados['tabuada'] = [];
for($a = 1; $a <= 5; $a++) {
    for($b = 1; $b <= 5; $b++) {
        $dados['tabuada'][$a.'x'.$b] = $a * $b;
    }
}

echo json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

?>