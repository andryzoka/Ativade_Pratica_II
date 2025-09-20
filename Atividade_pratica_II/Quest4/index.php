<?php
$matriz1 = [];
$matriz2 = [];
$resultante = [];

// Preencher matriz 1
echo "Matriz 1 \n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz1[$i][$j] = (int) readline("Digite o valor para posição [$i][$j]: ");
    }
}

// Preencher matriz 2
echo "\n Matriz 2 \n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz2[$i][$j] = (int) readline("Digite o valor para posição [$i][$j]: ");
    }
}

// Somar as duas matrizes
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $resultante[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
    }
}

// Exibir matriz resultante
echo "\nMatriz Resultante\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $resultante[$i][$j] . "\t";
    }
    echo "\n";
}
?>
