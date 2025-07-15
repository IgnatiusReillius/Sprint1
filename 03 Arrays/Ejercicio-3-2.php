<?php
    $X = array (10, 20, 30, 40, 50, 60);
    
    echo "La longitud del array es de " . count($X) . PHP_EOL;
    var_dump($X);

    unset($X[3]);
    echo "Borrado el 4º item del array." . PHP_EOL;
    var_dump($X);
    
    echo "Reordenado los índices del array." . PHP_EOL;
    sort($X);
    var_dump($X);
?>