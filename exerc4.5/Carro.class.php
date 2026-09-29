<?php



class Carro
{

    private $fabricante;
    private $modelo;
    private $preco;

    function __construct($fabricante, $modelo, $preco)
    {
        $this->fabricante = $fabricante;
        $this->modelo = $modelo;
        $this->preco = $preco;
    }

    public function exibirClass()
    {

        if ($this->preco < 100000) {
            $classificacao = "Carro Popular";
        } elseif ($this->preco <= 300000) {
            $classificacao = "Carro Intermediário";
        } else {
            $classificacao = "Carro de Alta Performance";
        }

        echo "Classificação: " . $classificacao . "<br><br>";
    }

    public function exibirInfos()
    {
        echo "<h2>Informações do Carro</h2>";
        echo "Modelo: " . $this->modelo . "<br><br>";
        echo "Fabricante: " . $this->fabricante . "<br><br>";
        echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "<br><br>";
    }

    public function exibirPop()
    {
        if ($this->preco < 100000) {
            echo "<h2>Informações de Carro Popular</h2>";
            echo "Modelo: " . $this->modelo . "<br><br>";
            echo "Fabricante: " . $this->fabricante . "<br><br>";
            echo "Preço: R$" . number_format($this->preco, 2, ',', '.') . "<br><br>";
        } elseif ($this->preco <= 300000) {
            echo "O carro selecionado não é um carro popular!";
        } else {
            echo "O carro selecionado não é um carro popular!";
        }
    }
}
