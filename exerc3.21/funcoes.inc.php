<?php

function mediaSimples($nota1, $nota2, $nota3){
    $resultado = ($nota1 + $nota2 + $nota3) / 3;
    return $resultado;
}

function mediaPonderada($nota1, $nota2, $nota3){
    $resultado = (($nota1 * 5) + ($nota2 * 3) + ($nota3 * 2)) / 10;
    return $resultado;
}


function mostrarNotas($nota1, $nota2, $nota3){
    echo "<table border='1'>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <tr>
                <td>" . $nota1 . "</td>
                <td>" . $nota2 . "</td>
                <td>" . $nota3 . "</td>
            </tr>";
}
?>