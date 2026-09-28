<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "funcoes.inc.php";

echo "<h2>Média</h2>";

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

$media = $_POST["media"];

if($media == "mediaS"){
    $resultado = mediaSimples($nota1,$nota2,$nota3);
    echo "A média simples das notas é: " . $resultado;
}

if($media == "mediaP"){
    $resultado = mediaPonderada($nota1,$nota2,$nota3);
    echo "A média ponderada das notas é: " . $resultado;
}

echo "<br><br>";

echo mostrarNotas($nota1,$nota2,$nota3);

?>