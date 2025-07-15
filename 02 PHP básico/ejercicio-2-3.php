<?php
    $x = 10;
    $y = 4;
    $n = 1.234;
    $m = 5.678;
    echo "x = $x, y = $y, n = $n, m = $m";
    echo "\nx + y = " . $x + $y;
    echo "\nx - y = " . $x - $y;
    echo "\nx * y = " . $x * $y;
    echo "\nx % y = " . $x % $y;

    echo "\nn + m = " . $n + $m;
    echo "\nn - m = " . $n - $m;
    echo "\nn * m = " . $n * $m;
    echo "\nn % m = " . (int) $n % (int) $m;

    echo "\nEl doble de x es " . $x*$x;
    echo "\nEl doble de y es " . $y*$y;
    echo "\nEl doble de n es " . $n*$n;
    echo "\nEl doble de m es " . $m*$m;

    echo "\nLa suma de todas las variables es " . $x+$y+$n+$m;
    echo "\nEl producto de todas las variables es " . $x*$y*$n*$m;
    
    function MyCalculator(float $num1, float $num2, float $opeacion) {
        echo " \nFunción calculadora:";
        switch($opeacion){
            case 1:
                echo "\nLa suma de $num1 y $num2 es " . $num1 + $num2;
                break;
            case 2:
                echo "\nLa resta de $num1 y $num2 es " . $num1 - $num2;
                break;
            case 3:
                echo "\nLa multiplicación de $num1 y $num2 es " . $num1 * $num2;
                break;
            case 4:
                echo "\nLa división de $num1 y $num2 es " . $num1 / $num2;
                break;
            default:
                echo "\nNo has introducido una operación manejable.";
                break;
        }
    }

    MyCalculator(3,5,3);
?>