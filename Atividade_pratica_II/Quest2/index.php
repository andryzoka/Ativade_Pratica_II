<?php
$numeros = [];
$pares = [];
$impares = [];

for ($i = 1; $i <= 10; $i++) {
    $num = (int) readline("digite um numero $i: ");
    $numeros[] = $num;
}
foreach ($numeros as $num) {
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

echo "\nnumeros pares: ";
if (!empty($pares)) {
    echo implode(", ", $pares);
}

echo "\nnumeros impares: ";
if (!empty($impares)) {
    echo implode(", ", $impares);
}
echo "\n";
?>
