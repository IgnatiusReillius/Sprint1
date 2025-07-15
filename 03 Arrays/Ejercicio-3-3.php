<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 3-3</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $arrayPalabras = array("hola", "Phpa", "Hthmla");
                $existe = true;

                function ComprobarLetra($array, string $letra){

                    global $arrayPalabras, $existe;
                    
                    foreach ($arrayPalabras as $palabra){
                        if(!str_contains($palabra, $letra)){
                            $existe = false;
                            return $existe;
                        }
                    }
                    return $existe;
                }

                echo ComprobarLetra($arrayPalabras, "h");
            ?>
        </h1>
    </body>
</html>