<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do carrinho</title>
</head>

<body>

    <?php

    $cod1 = $_POST["cod1"];
    $nome1 = $_POST["nome1"];
    $preco1 = $_POST["preco1"];

    $cod2 = $_POST["cod2"];
    $nome2 = $_POST["nome2"];
    $preco2 = $_POST["preco2"];

    $cod3 = $_POST["cod3"];
    $nome3 = $_POST["nome3"];
    $preco3 = $_POST["preco3"];


    $remedios = array();

    $remedios[$cod1] = array("nome" => $nome1, "preco" => $preco1);
    $remedios[$cod2] = array("nome" => $nome2, "preco" => $preco2);
    $remedios[$cod3] = array("nome" => $nome3, "preco" => $preco3);


    echo "<h2>Lista de medicamentos</h2>
            <table border='1'>
            <th>Código do medicamento</th>
            <th>Nome do medicamento</th>
            <th>Preço do medicamento</th>";


    $consulta = $_POST["consulta"];

    foreach ($remedios as $cod => $dados) {

        echo "<tr>
                <td>" . $cod . "</td>
                <td>" . $dados["nome"] . "</td>
                <td>" . $dados['preco'] . "</td>
             </tr>";

    }

    echo "</table><br><br>";

    $precoMed = array();
    $precoMed = array("cod" => $cod1, "nome" => $nome1, "preco" => $preco1);

    foreach ($remedios as $cod => $dados) {

        if ($precoMed["preco"] >= $dados["preco"]) {
            $precoMed['cod'] = $cod;
            $precoMed['nome'] = $dados['nome'];
            $precoMed['preco'] = $dados['preco'];
            
        }


    }


        echo "<h2>Medicamento mais barato</h2>
                <table border='1'>
                <th>Código do medicamento</th>
                <th>Nome do medicamento</th>
                <th>Preço do medicamento</th>";

            echo "<tr>
                    <td>" . $precoMed['cod'] . "</td>
                    <td>" . $precoMed["nome"] . "</td>
                    <td>" . $precoMed['preco'] . "</td>
                  </tr>";



            echo "</table><br><br>";

    foreach ($remedios as $cod => $dados) {

        if ($cod == $consulta) {

            echo "<h2>Medicamento Consultado</h2>
                <table border='1'>
                <th>Código do medicamento</th>
                <th>Nome do medicamento</th>
                <th>Preço do medicamento</th>";

            echo "<tr>
                    <td>" . $cod . "</td>
                    <td>" . $dados["nome"] . "</td>
                    <td>" . $dados['preco'] . "</td>
                  </tr>";



            echo "</table><br><br>";
        }

        /*$matricula . $dados["nome"] . $dados["media"];*/

    }

    ?>

</body>

</html>