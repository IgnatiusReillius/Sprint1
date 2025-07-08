<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 2-1</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $entero = 10;
                $decimales = 1.234;
                $frase = "Esta es mi frase";
                $booleana = true;
                echo "La variable entero: $entero,</br> el double: $decimales,</br> el String: '$frase',</br> la booleana: $booleana</br>";
                define("miNombre", "Nacho");
                echo "la constante: " . miNombre;
            ?>
        </h1>
    </body>
</html>