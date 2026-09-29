<?php


include "Carro.class.php";

$modelo = $_POST["modelo"];
$fabricante = $_POST["fabricante"];
$preco = $_POST["preco"];

$carro1 = new Carro($fabricante, $modelo, $preco);

$carro1->exibirInfos();

$carro1->exibirClass();

$carro1->exibirPop();