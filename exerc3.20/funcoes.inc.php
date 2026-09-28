<?php

function celsiusParaFahrenheit($celsius){
    $resultado = ($celsius * 9/5) + 32;
    return $resultado;
}

function fahrenheitParaCelsius($fahrenheit){
    $resultado = ($fahrenheit - 32) * 5/9;
    return $resultado;
}

?>