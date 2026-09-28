<?php

/*Em seguida, um script em PHP deverá:

a) Calcular o valor da comissão do vendedor. Este cálculo deve ser feito por meio de uma função de usuário do PHP;

b) Calcular o valor do desconto fornecido ao cliente, por meio de uma função de usuário em PHP;

c) Calcular o valor final da venda, levando em consideração o desconto dado ao cliente. Esta tarefa deve ser 
executada por uma função de usuário em PHP;

d) Mostrar, na página web, por meio de uma função de usuário, as seguintes informações:

    O valor inicial da venda;
    O percentual de comissão do vendedor;
    O valor da comissão do vendedor;
    O valor do desconto dado ao cliente, caso tenha pago com cartão de fidelidade;
    O valor final da compra pago pelo cliente.
*/


$venda = $_POST["venda"];
$comissao = $_POST["comissao"];
$metodo = $_POST["metodo"];

function comissaoVendedor($venda, $comissao){
    $resultado = $venda * ($comissao / 100);
    return $resultado;

}


function valorDesconto($venda){
    $resultado = $venda * 0.05;
    return $resultado;
    }

function valorVenda($metodo, $venda){
    if($metodo == "cartao"){
        $venda = $venda - valorDesconto($venda);
    }

    return $venda;
}

function compraFinal($venda, $comissao, $metodo){
    echo "O valor inicial da venda foi de R$" . $venda . "<br><br>";
    echo "O percentual de comissao do vendedor foi de " . $comissao . "%, que gerou uma comissão de R$" . comissaoVendedor($venda, $comissao) . "<br><br>";
    
    if($metodo == "cartao"){
        echo "O valor de desconto foi de R$" . valorDesconto($venda) . "<br><br>";
    }

    echo "O valor final da compra foi de R$" . valorVenda($metodo, $venda);
}


echo "<h1>Finalização de Compra</h1>";

echo compraFinal($venda, $comissao, $metodo);



?>