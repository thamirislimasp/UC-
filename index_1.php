<?php
// Existem duas funções fundamentais no PHP para tratar JSON
// Uma para criar dados no formato JSON
// Outra para transformar dados de formato JSON em PHP(arrays)

// Transforma Arrays em JSON
$dados = [
    'João',
    'Ana',
    'Carlos',
    'Joaquim',
    'Cristina',
    'André',
    'Conceição'
];
echo '<pre>';

// json_encode transforma uma array em uma string JSON.
echo json_encode ($dados);

echo '<hr>';
//Dados vão aparecer com caracteres unicode
echo json_encode ($dados, JSON_PRETTY_PRINT);

echo '<hr>';
// Ajustar acentuações. Deixa legível
echo json_encode ($dados, JSON_UNESCAPED_UNICODE); 

echo '<hr>';
// Ajustar acentuações e JSON (soma dos dois acima)
echo json_encode ($dados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

echo '<hr>';
echo '<br>';

// Assosciação por JS
$dadoss = [
    'administrador' => 'João Ribeiro',
    'secretária' => 'Carla Santos',
    'diretor_geral' => 'Márcio Silva',
    'oficial_contas' => 'Fernada Correia'
];

echo json_encode ($dadoss, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

?>

<script>
    let dadoss = JSON.parse('<?= json_encode ($dadoss, JSON_UNESCAPED_UNICODE) ?>');

    // Apresentação dos dados como objeto
    console.log(dadoss);

    // Tabela
    console.table(dadoss);

    // Individual
    console.log(dadoss.administrador);

</script>



