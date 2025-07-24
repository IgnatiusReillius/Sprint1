<?php 
    $array1 = array (1, 2, 3, 3.5, 4,      4.5, 5);
    $array2 =       [1,       3.5,    4.2, 4.5,    6, 10];

    // Devolver los números en común de ambos arrays
    function intersectarArraysMedianteFunciones(array $array1, array $array2) : array { // Debería devolver 1 3.5 4.5
        $arrayUnido = [];

        $arrayUnido = array_intersect($array1, $array2);

        return $arrayUnido;
    }
    function intersectarArraysMedianteAlgoritmos(array $array1, array $array2) : array { // Debería devolver 1 3.5 4.5
        $arrayUnido = [];

        foreach($array1 as $numero1){
            foreach($array2 as $numero2){
                if($numero1 == $numero2){
                    $arrayUnido[] = $numero1;
                }
            }
        }

        return $arrayUnido;
    }

    // Devolver la mezcla de ambos arrays sin duplicar
    function unirArraysMedianteFunciones(array $array1, array $array2) : array { // Debería devolver 1 2 3 3.5 4 4.2 4.5 5 6 10
        $arrayUnido = $array1;

        $arrayUnido = array_merge($array1, $array2);
        $arrayUnido = array_unique($arrayUnido);
        asort($arrayUnido);

        return $arrayUnido;
    }
    function unirArraysMedianteAlgoritmos(array $array1, array $array2) : array { // Debería devolver 1 2 3 3.5 4 4.5 5 4.2 6 10
        $arrayUnido = $array1;

        $canAdd = true;
        foreach($array2 as $numero2){
            foreach($arrayUnido as $numeroUnido){
                if($numero2 == $numeroUnido && $canAdd){
                    $canAdd = false;
                    break;
                }
            } 

            if($canAdd) {
                $arrayUnido[] = $numero2;
            } else {
                $canAdd = true;
            }
        }

        return $arrayUnido;
    }

    $intersectarArraysMedianteFunciones = intersectarArraysMedianteFunciones($array1, $array2);
    echo "Intersectar mediante funciones: ";
    foreach($intersectarArraysMedianteFunciones as $numero) { echo $numero . " "; }
    echo PHP_EOL;
    $intersectarArraysMedianteAlgoritmos = intersectarArraysMedianteAlgoritmos($array1, $array2);
    echo "Intersectar mediante algoritmos: ";
    foreach($intersectarArraysMedianteAlgoritmos as $numero) { echo $numero . " "; }
    
    echo PHP_EOL;

    $unirArraysMedianteFunciones = unirArraysMedianteFunciones($array1, $array2);
    echo "Unir mediante funciones: ";
    foreach($unirArraysMedianteFunciones as $numero) { echo $numero . " "; }
    echo PHP_EOL;
    $unirArraysMedianteAlgoritmos = unirArraysMedianteAlgoritmos($array1, $array2);
    echo "Unir mediante algoritmos: ";
    foreach($unirArraysMedianteAlgoritmos as $numero) { echo $numero . " "; }
?>