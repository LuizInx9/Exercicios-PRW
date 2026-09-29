<?php

include "Item.class.php";

$nome = $_POST['nome'];
$classificacao = $_POST['classificacao'];
$preco = $_POST['preco'];

$item = new Item($nome, $classificacao, $preco);

$item->exibirInfos();
$item->calculaDesconto();
$item->precoFinal();
$item->exibirInfos();
