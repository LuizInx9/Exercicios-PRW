<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
</head>
<body>

    <h1>Conversão de temperatura</h1>

    <?php

    $conversao = $_POST["conversao"];
    $temperatura = $_POST["graus"];

    function conversaoCelsius($temperatura) {
   
        $resultado = ($temperatura - 32) * 5/9;
    
    return $resultado;
    }

    function conversaoFahrenheit($temperatura) {
        $resultado = ($temperatura * 9/5) + 32;

        return $resultado;
    }


    if($conversao == "celsius") {
       echo "$temperatura graus Fahrenheit é equivalente a " . conversaoCelsius($temperatura) . " graus Celsius";
    } else if($conversao == "fahrenheit") {
       echo "$temperatura graus Celsius é equivalente a " . conversaoFahrenheit($temperatura) . " graus Fahrenheit";
    }



    ?>

</body>
</html>