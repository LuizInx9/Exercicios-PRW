<?php

include "livro.class.php";

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$isbn = $_POST["isbn"];
$preco = $_POST["preco"];
$desconto = $_POST["desconto"];


$livro = new Livro($titulo, $autor, $isbn, $preco);

$livro->aplicarDesconto($desconto);

$livro->exibirInfos($preco);
