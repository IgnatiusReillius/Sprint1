<?php
    const BASE = 0.1, MINUTOEXTRA = 0.05;
    
    $precioLlamada = 0;
    
    function calcularPrecioLlamada (int $minutos) : float {
        $precio = BASE;
        if($minutos > 3) {
            $precio += MINUTOEXTRA * $minutos;
        }
        return $precio;
    }

    calcularPrecioLlamada(5);
?>