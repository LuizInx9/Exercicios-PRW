<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho 3.8</title>
</head>
<body>
    <h1>Carrinho</h1>

    <?php

    $carrinho = array();

    if(isset($_POST["ibuprofeno"])){
        $ibuprofeno = $_POST["ibuprofeno"];
        $carrinho["ibuprofeno"] = $ibuprofeno;
    }
    
    if(isset($_POST["neosaldina"])){
        $neosaldina = $_POST["neosaldina"];
        $carrinho["neosaldina"] = $neosaldina;
    }
    
    if(isset($_POST["dipirona"])){
        $dipirona = $_POST["dipirona"];
        $carrinho["dipirona"] = $dipirona;
    }
    


    $valor = 0;

    foreach($carrinho as $key => $value){
    
        $valor = $valor + $value;

    }

    if(isset($_POST["idoso"])){
        $valor = $valor - ($valor * 0.05);
    }


    echo "<h2>O valor final do carrinho é de R$$valor";




    ?>



    
</body>
</html>