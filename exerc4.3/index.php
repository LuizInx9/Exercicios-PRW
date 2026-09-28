<?php
class ContaBancaria
{

    private float $saldo;

    function __construct(float $saldo)
    {
        $this->saldo = $saldo;
    }

    public function consultarSaldo(): float
    {

        echo "O saldo atual é de R$" . number_format($this->saldo, 2, ',' , '.') . "<br><br>";

        return $this->saldo;
    }

    public function depositar(float $valor): void
    {
        if( $valor <= 0){
            echo "Depósito inválido!<br><br>";
            return;
        }

        $this->saldo += $valor;

        echo "O valor de R$" . number_format($valor, 2 , ',' , '.') . " foi adicionado ao saldo.<br><br>";
    }

    public function sacar(float $valor): void
    {
        if( $valor <= 0){
            echo "Valor inválido!<br><br>";
            return;

        } elseif( $valor > $this->saldo){
            echo "Saldo insuficiente!<br><br>";
            return;
        }

        $this->saldo -= $valor;

        echo "O valor de R$" . number_format($valor, 2 , ',' , '.') . " foi retirado do saldo.<br><br>";


    }
}


$novaConta = new ContaBancaria(300);

$novaConta->consultarSaldo();

$novaConta->depositar(10);

$novaConta->consultarSaldo();


$novaConta->sacar(40);

$novaConta->consultarSaldo();

?>