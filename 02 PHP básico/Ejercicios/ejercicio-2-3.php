<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio 2-3</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                $x = 10;
                $y = 4;
                $n = 1.234;
                $m = 5.678;
                echo "x = $x, y = $y, n = $n, m = $m";
                echo "</br> x + y = " . $x + $y;
                echo "</br> x - y = " . $x - $y;
                echo "</br> x * y = " . $x * $y;
                echo "</br> x % y = " . $x % $y;

                echo "</br> n + m = " . $n + $m;
                echo "</br> n - m = " . $n - $m;
                echo "</br> n * m = " . $n * $m;
                echo "</br> n % m = " . $n % $m;

                echo "</br> El doble de x es " . $x*$x;
                echo "</br> El doble de y es " . $y*$y;
                echo "</br> El doble de n es " . $n*$n;
                echo "</br> El doble de m es " . $m*$m;

                echo "</br> La suma de todas las variables es " . $x+$y+$n+$m;
                echo "</br> El producto de todas las variables es " . $x*$y*$n*$m;
                
                function MyCalculator($num1, $num2, $opeacion) {
                    echo " </br>Función calculadora:";
                    switch($opeacion){
                        case 1:
                            echo "</br> La suma de $num1 y $num2 es " . $num1 + $num2;
                            break;
                        case 2:
                            echo "</br> La resta de $num1 y $num2 es " . $num1 - $num2;
                            break;
                        case 3:
                            echo "</br> La multiplicación de $num1 y $num2 es " . $num1 * $num2;
                            break;
                        case 4:
                            echo "</br> La división de $num1 y $num2 es " . $num1 / $num2;
                            break;
                        default:
                            echo "</br> No has introducido una operación manejable.";
                            break;
                    }
                }

                MyCalculator(3,5,3);
            ?>
        </h1>
    </body>
</html>