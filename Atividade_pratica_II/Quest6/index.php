<?php
function areaQuadrado($lado) {
    return $lado * $lado;
}
function areaRetangulo($base, $altura) {
    return $base * $altura;
}
function areaCirculo($raio) {
    return pi() * $raio * $raio;
}
echo "Escolha uma figura geometrica:\n";
echo "1 - Quadrado\n";
echo "2 - Retangulo\n";
echo "3 - Circulo\n";
$opcao = (int) readline("Digite o numero da figura: ");

switch ($opcao) {
    case 1:
        $lado = (float) readline("Digite o lado do quadrado: ");
        echo "Area do quadrado: " . areaQuadrado($lado) . "\n";
        break;
    case 2:
        $base = (float) readline("Digite a base do retangulo: ");
        $altura = (float) readline("Digite a altura do retangulo: ");
        echo "Area do retangulo: " . areaRetangulo($base, $altura) . "\n";
        break;
    case 3:
        $raio = (float) readline("Digite o raio do circulo: ");
        echo "Area do circulo: " . areaCirculo($raio) . "\n";
        break;
}
?>
