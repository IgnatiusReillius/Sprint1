<?php
    function ContarNumeros(int $salto, int $final = 10){
        echo "Vamos a contar de 1 a $final de $salto en $salto:" . PHP_EOL;
        for($numero = 1; $numero <= $final; $numero += $salto){
            echo $numero . PHP_EOL;
        }
    }
    
    ContarNumeros(6,50);
?>