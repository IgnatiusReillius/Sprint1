<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 3-4</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $arrayInfo = ["Nombre" => "Nacho","Edad" => 32, "Email" => "nacho@email.com", "Comida favorita" => "Queso"];
                foreach ($arrayInfo as $info){
                    echo $info . "</br>";
                }
            ?>
        </h1>
    </body>
</html>