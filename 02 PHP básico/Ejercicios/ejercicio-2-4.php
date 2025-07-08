<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 2-4</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                function ContarNumeros($salto, $final = 10){
                    echo "Vamos a contar de 1 a $final de $salto en $salto: </br>";
                    for($numero = 1; $numero <= $final; $numero += $salto){
                        echo $numero . "</br>";
                    }
                }
                
                ContarNumeros(6,50);
            ?>
        </h1>
    </body>
</html>