<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 2-6</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                function CharlieBitesMe(){
                    $probabilidad = rand(0,100);
                    if ($probabilidad > 50) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                }
                
                CharlieBitesMe();
            ?>
        </h1>
    </body>
</html>