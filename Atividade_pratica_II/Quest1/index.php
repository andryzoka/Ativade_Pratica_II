<?php
$frutas = [];


for ($i = 1; $i <= 5; $i++) {
    $fruta = readline("digite uma fruta $i: ");
    $frutas[] = $fruta;
}


sort($frutas);

echo "\nfrutas em ordem alfabetica:\n";
foreach ($frutas as $fruta) {
    echo "- $fruta\n";
}
?>
