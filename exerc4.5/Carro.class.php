<?php

/*
Necessitamos de uma aplicação web que implemente uma classe, na linguagem PHP, para representar os elementos mais importantes na definição de um objeto carro, a saber:

a) Fabricante;
b) Modelo;
c) Preço de venda;
d) Método construtor da classe;
e) Método para exibir a classificação de um carro, de acordo com seu preço de venda, da seguinte forma:

para até 100 mil reais — carro popular;
entre 100 e 300 mil (inclusive) — performance intermediária;
para carros acima de 300 mil reais — carros de alta performance;
f) Método para exibir todas as informações somente de um carro que foi classificado como popular. Se o carro não se encaixar nessa categoria, o método não deve exibir nenhuma informação e mostrar uma mensagem adequada.

Criar um formulário, válido e correto, em HTML5, com as informações de cadastro dos dados do carro. Em seguida, um script em PHP deve, utilizando a classe construída, criar um objeto carro com as informações do formulário, exibir sua classificação e mostrar todas as suas informações, se for o caso.

A definição da classe deve estar dentro de uma include em PHP.
*/

class Carro{

    private $fabricante;
    private $modelo;
    private $preco;


}
