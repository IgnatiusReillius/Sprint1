<?php
    define("PRECIOCHOCOLATE", 1);
    define("PRECIOCHICLES", 0.5);
    define("PRECIOCARAMELOS", 1.5);

    function calcularTotalChocolate(int $chocolates) : int {
        return $chocolates * PRECIOCHOCOLATE;
    }

    function calcularTotalChicles(int $chicles) : float {
        return $chicles * PRECIOCHICLES;
    }

    function calcularTotalCaramelos(int $caramelos) : float {
        return $caramelos * PRECIOCARAMELOS;
    }

    function calcularTotalChuches(int $numChocolates, int $numChicles, int $numCaramelos) {
        echo "$numChocolates chocolatinas, $numChicles chicles y $numCaramelos caramelos harán un total de " . calcularTotalChocolate($numChocolates) + calcularTotalChicles($numChicles) + calcularTotalCaramelos($numCaramelos) . "€";
    }

    echo calcularTotalChuches(2, 10, 5);

?>