<?php

// Função para gerar 10 valores aleatórios
function gerarArrayAleatorio() {
    $array = [];
    for ($i = 0; $i < 10; $i++) {
        $array[] = rand(1, 100);
    }
    return $array;
}

// 1. Armazenar 10 valores aleatórios em um array
$numeros = gerarArrayAleatorio();
echo "<h2>Array Aleatório:</h2>";
echo implode(", ", $numeros);

// 2. Ordenar o array em ordem crescente usando Bubble Sort
$tamanho = count($numeros);
$numeros_crescente = $numeros; // Cria uma cópia para ordenar

for ($i = 0; $i < $tamanho - 1; $i++) {
    for ($j = 0; $j < $tamanho - $i - 1; $j++) {
        // Compara e troca os elementos se estiverem fora de ordem
        if ($numeros_crescente[$j] > $numeros_crescente[$j + 1]) {
            $temp = $numeros_crescente[$j];
            $numeros_crescente[$j] = $numeros_crescente[$j + 1];
            $numeros_crescente[$j + 1] = $temp;
        }
    }
}

// 3. Ordenar o array em ordem decrescente
// Para fazer isso, basta inverter a lógica de comparação no loop
$numeros_decrescente = $numeros; // Cria outra cópia
for ($i = 0; $i < $tamanho - 1; $i++) {
    for ($j = 0; $j < $tamanho - $i - 1; $j++) {
        // Compara e troca os elementos
        if ($numeros_decrescente[$j] < $numeros_decrescente[$j + 1]) {
            $temp = $numeros_decrescente[$j];
            $numeros_decrescente[$j] = $numeros_decrescente[$j + 1];
            $numeros_decrescente[$j + 1] = $temp;
        }
    }
}

echo "<h2>Array em Ordem Crescente:</h2>";
echo implode(", ", $numeros_crescente);

echo "<h2>Array em Ordem Decrescente:</h2>";
echo implode(", ", $numeros_decrescente);

?>