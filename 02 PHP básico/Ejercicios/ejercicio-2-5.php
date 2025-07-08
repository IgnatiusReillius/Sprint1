<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 2-5</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                function VerificarNota($nota){
                    if ($nota >= 60) {
                        echo "Va a Primera División.";
                    } else if ($nota >= 45 && $nota < 60) {
                        echo "Va a Segunda División.";
                    } else if ($nota >= 33 && $nota < 45) {
                        echo "Va a Tercera División.";
                    } else {
                        echo "Va a tener que recuperar.";
                    }
                }
                
                VerificarNota(32);
            ?>
        </h1>
    </body>
</html>