<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Exercício 3.7</title>
</head>

<body>

<?php

$nome1 = $_POST["nome1"];
$nome2 = $_POST["nome2"];
$nome3 = $_POST["nome3"];


$idade1 = $_POST["idade1"];
$idade2 = $_POST["idade2"];
$idade3 = $_POST["idade3"];


$pessoas = array(
    $nome1 => $idade1,
    $nome2 => $idade2,
    $nome3 => $idade3
);

echo "<table border='1'>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>";


ksort($pessoas);


foreach ($pessoas as $nome => $idade) {
    
 


   echo "<tr>
            <td>" . $nome . "</td>
            <td>" . $idade . "</td>
         </tr>";
   

}

echo "</table>";

?>


</body>

</html>