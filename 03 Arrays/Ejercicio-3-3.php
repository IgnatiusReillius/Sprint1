<?php
    $arrayPalabras = array("hola", "Phpa", "Hthmla");

    function ComprobarLetra(array $array, string $letra) : string{
        
        foreach ($array as $palabra){
            if(!str_contains($palabra, $letra)){
                return "false";
            }
        }
        return "true";
    }

    echo ComprobarLetra($arrayPalabras, "n");
?>