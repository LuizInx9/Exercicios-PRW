<?php

include("funcoes.inc.php");

$peso = $_POST["peso"];
$altura = $_POST["altura"];

echo "<h1>Resultado do IMC</h1>";

$imc = calcularIMC($peso, $altura);
mostrarResultadoIMC($imc);

?>
