<?php

class Item {
    public $nome;
    public $preco;
    public $categoria;

    public function getCategoria(){
        return $this->categoria;
    }

    public function setPreco($preco){
        $this->preco = $preco;

    }

    public function mostrarPreco(){
        echo "O preço é: " . number_format($this->preco, 2, ',' , '.');
    }
}

    $item = new Item();

    $item->nome = "Teclado";
    $item->preco = 40.99;
    $item->categoria = "perifericos";

    echo "<h1>Informações do item</h1>";

    echo "Nome: " . $item->nome . "<br>";
    echo "Categoria: " . $item->categoria . "<br><br>";

    echo "Preço atual: " . $item->preco . "<br><br>";

    $item->setPreco(55.45);
    echo "Novo preço: " . $item->preco;


?>