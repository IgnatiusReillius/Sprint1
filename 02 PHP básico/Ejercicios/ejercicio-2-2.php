<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 2-2</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $frase = "Hello, World!";
                echo strtoupper($frase) . "</br>";
                echo strlen($frase) . "</br>";
                echo strrev($frase) . "</br>";
                $otraVariable = "Éste es el curso de PHP.";
                echo $frase . " " . $otraVariable;
            ?>
        </h1>
    </body>
</html>