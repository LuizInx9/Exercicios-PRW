<?php

class Item{

    private $nome;
    private $classificacao;
    private $preco;


    function __construct($nome, $classificacao, $preco)
    {
        $this->nome = $nome;
        $this->classificacao = $classificacao;
        $this->preco = $preco;
    }

    public function calculaDesconto(){
        if($this->classificacao == "hardware"){
            $desconto = $this->preco * 0.05;
            $this->preco -= $desconto;
        } else{
            $desconto = $this->preco * 0.07;
            $this->preco -= $desconto;
        }

        echo "<h2>Desconto</h2>";
        echo "Desconto: " . number_format($desconto, 2, ',' , '.') . "<br><br>";
    }

    public function precoFinal(){
        echo "Preço final: " . number_format($this->preco, 2, ',' , '.') . "<br><br>";
    }

    public function exibirInfos(){
        echo "<h2>Informações do Item</h2>";
        echo "Nome do item: " . $this->nome . "<br><br>";
        echo "Classificação: " . $this->classificacao . "<br><br>";
        echo "Preço: " . number_format($this->preco, 2, ',' , '.') . "<br><br>";
    }
}