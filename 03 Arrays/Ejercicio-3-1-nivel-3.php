<?php
    // Donat un array d’enters, fes un programa que:
    // Retorni cada valor de l’array elevat al cub fent servir la funció array_map()
    $arrayInt = [3, 12, 30, 8, 5];

    function exponent(int $number) {
        return ($number * $number);
    }

    $arrayIntExp = array_map("exponent", $arrayInt);

    for($i = 0; $i < count($arrayInt); $i++) {
        echo "El cuadrado de " . $arrayInt[$i] . " es " . $arrayIntExp[$i] . "\n";
    }
?>