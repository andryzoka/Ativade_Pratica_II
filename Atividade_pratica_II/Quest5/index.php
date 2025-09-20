<?php
function celsiusParaFahrenheit($c) {
    return ($c * 9/5) + 32;
}
function fahrenheitParaCelsius($f) {
    return ($f - 32) * 5/9;
}
$temp = (float) readline("digite a temperatura: ");
$escala = strtolower(readline("digite a escala desejada (C para elsius, f para fahrenheit): "));
if ($escala === "c") {
    $convertida = celsiusParaFahrenheit($temp);
    echo "$temp °C equivalem a $convertida °F\n";
} elseif ($escala === "f") {
    $convertida = fahrenheitParaCelsius($temp);
    echo "$temp °F equivalem a $convertida °C\n";
} 
?>
