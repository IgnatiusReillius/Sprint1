<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 3-2</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $X = array (10, 20, 30, 40, 50, 60);
                var_dump($X);

                unset($X[3]);
                sort($X);
                
                echo "</br>";
                var_dump($X);
            ?>
        </h1>
    </body>
</html>