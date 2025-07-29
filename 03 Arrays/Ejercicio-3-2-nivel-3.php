<?php
    // Donat un array d’strings, fes un programa que:
    // Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().
    $arrayStrings = ["hola", "que", "tal", "estas", "el", "día", "de", "hoy"];

    function returnEvenWords(string $valuesArray) {
        if(strlen($valuesArray) % 2 == 0){
            return $valuesArray;
        }
    }

    $arrayEvenStrings = array_filter($arrayStrings, "returnEvenWords");

    foreach($arrayEvenStrings as $evenWord) {
        echo $evenWord . " ";
    }
?>