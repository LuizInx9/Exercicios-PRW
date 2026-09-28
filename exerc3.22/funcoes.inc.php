<?php

// Calcula o IMC a partir do peso (kg) e da altura (m) e retorna o valor para o script principal
function calcularIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);
    return $imc;
}

// Recebe o IMC já calculado, mostra o valor e a classificação correspondente na tabela
function mostrarResultadoIMC($imc){
    echo "Seu IMC é: " . number_format($imc, 2, ',', '.') . "<br><br>";

    if($imc < 18.5){
        echo "Classificação: Abaixo do peso";
    } elseif($imc < 25){
        echo "Classificação: Peso normal";
    } elseif($imc < 30){
        echo "Classificação: Sobrepeso";
    } elseif($imc < 35){
        echo "Classificação: Obesidade grau 1";
    } elseif($imc < 40){
        echo "Classificação: Obesidade grau 2";
    } else {
        echo "Classificação: Obesidade grau 3";
    }
}

?>
