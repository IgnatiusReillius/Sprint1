<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 3-1</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $numeros = [];
                $numeros[] = 23;
                $numeros[] = 70;
                $numeros[] = 42;
                $numeros[] = 3;
                $numeros[] = 81;
                foreach($numeros as $numero){
                    echo $numero . "</br>";
                }
            ?>
        </h1>
    </body>
</html>