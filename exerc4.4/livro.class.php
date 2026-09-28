<?php

class Livro {

    private $titulo;
    private $autor;
    private $isbn;
    private $preco;
    
    function __construct($titulo, $autor, $isbn, $preco){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->preco = $preco;    
    }

    public function aplicarDesconto(int $percentual) : void  {
        $desconto = $this->preco * ($percentual/100);
        $this->preco -= $desconto;
    
    }

    public function exibirInfos($preco){
        echo "<h2>Informações do Livro</h2>";
        echo "Título: " . $this->titulo .  "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "ISBN: " . $this->isbn . "<br>";
        echo "Preço original: " . $preco . "<br>";
        echo "Preço de venda: " . $this->preco . "<br>";
    }


}

