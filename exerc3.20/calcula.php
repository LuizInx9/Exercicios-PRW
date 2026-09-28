<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "funcoes.inc.php";

$graus = $_POST["graus"];
$conversao = $_POST["conversao"];

echo "<h1>Conversão de Temperaturas</h1>";

if ($conversao == "fahrenheit") {
    $resultado = celsiusParaFahrenheit($graus);

    echo "O valor de " . $graus . " graus Celsius é equivalente a " . $resultado ." graus Fahrenheit";
} elseif ($conversao == "celsius") {
    $resultado = fahrenheitParaCelsius($graus);

    echo "O valor de " . $graus . " graus Fahrenheit é equivalente a " . $resultado ." graus Celsius";
}



?>