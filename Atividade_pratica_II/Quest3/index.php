<?php
$produtos = [];

for ($i = 1; $i <= 4; $i++) {
    $nome = readline("digite o nome do produto $i: ");
    $quantidade = (int) readline("digite a quantidade do produto $i: ");
    $preco = (float) readline("digite o preco unitario do produto $i: ");

    $produtos[] = [
        'nome' => $nome,
        'quantidade' => $quantidade,
        'preco' => $preco,
        'total' => $quantidade * $preco
    ];
}

echo "\n---------------------------------------------\n";
echo "| Produto | quatidade | preco unitario | Total |\n";
echo "---------------------------------------------\n";

foreach ($produtos as $p) {
    printf(
        "| %-13s | %-3d | %-10.2f | %-6.2f       |\n",
        $p['nome'],
        $p['quantidade'],
        $p['preco'],
        $p['total']
    );
}

echo "---------------------------------------------\n";
?>
