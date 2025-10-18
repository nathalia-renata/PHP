<?php

$catalogo_geral = [
    // Títulos que eu assisti
    ['titulo' => 'Tougen Anky', 'genero' => 'Ação'],
    ['titulo' => 'Duna: Parte 2', 'genero' => 'Ficção Científica'],
    ['titulo' => 'Loki', 'genero' => 'Ficção Científica'],
    ['titulo' => 'The Last of Us', 'genero' => 'Terror'],
    ['titulo' => 'Café Minamdang', 'genero' => 'Comédia'],
    ['titulo' => 'O Poder e Lei', 'genero' => 'Drama'],
    ['titulo' => 'Amanhã', 'genero' => 'Drama'],
    ['titulo' => 'John Wick 4', 'genero' => 'Ação'],
    ['titulo' => 'Alquimia das Almas', 'genero' => 'Drama'],
    ['titulo' => 'Juvenile Justice', 'genero' => 'Drama'],

    // Títulos que pretendo assistir
    ['titulo' => 'Duna: Parte 3', 'genero' => 'Ficção Científica'],
    ['titulo' => 'Alice in Bordeland- 3 Temp', 'genero' => 'Ação'],
    ['titulo' => 'O Problema dos 3 Corpos', 'genero' => 'Ficção Científica'],
    ['titulo' => 'The Old Guardian', 'genero' => 'Ação'],
];

echo "<h1>Catálogo Geral de Filmes e Séries</h1>";
echo "<ul>";
foreach ($catalogo_geral as $item) {
    echo "<li><b>" . $item['titulo'] . "</b> (" . $item['genero'] . ")</li>";
}
echo "</ul>";


// 1. Contar a frequência de cada gênero
$contagem_generos = [];
foreach ($catalogo_geral as $item) {
    $genero = $item['genero'];
    if (!isset($contagem_generos[$genero])) {
        $contagem_generos[$genero] = 0;
    }
    $contagem_generos[$genero]++;
}

// 2. Encontrar o gênero predominante
arsort($contagem_generos);
$genero_predominante = key($contagem_generos);

// 3. Criar uma nova matriz com os filmes e séries do gênero predominante
$catalogo_predominante = [];
foreach ($catalogo_geral as $item) {
    if ($item['genero'] == $genero_predominante) {
        $catalogo_predominante[] = $item;
    }
}

echo "<h1>Gênero Predominante: " . $genero_predominante . "</h1>";
echo "<ul>";
foreach ($catalogo_predominante as $item) {
    echo "<li>" . $item['titulo'] . "</li>";
}
echo "</ul>";

?>