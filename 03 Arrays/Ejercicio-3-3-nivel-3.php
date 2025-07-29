<?php
    // Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce(). 
    $arrayInts = array(2,4,6,5,3,7,9,11,12,15); // 2 5 3 7 11 = 28


    function returnPrimeNumbers(mixed $carry, int $valueArray) {
        $isPrime = true;

        if ($valueArray <= 1) {
            $isPrime = false;
        }
        for ($i = 2; $i < $valueArray; $i++) {
            if ($valueArray % $i == 0) {
                $isPrime = false; 
            }
        }

        if($isPrime){
            $carry += $valueArray;
            return $carry;
        } else {
            $carry += 0;
            return $carry;
        }
    }

    echo "La suma de los primos del array da " . array_reduce($arrayInts, "returnPrimeNumbers");
?>