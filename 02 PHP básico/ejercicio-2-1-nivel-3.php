<?php
    function mostrarCriba(int $alcanceBusqueda) {
        // listar todos los números hasta $alcanceBusqueda
        // tomar el primer número disponible, 2, y marcar todos sus múltiplos de la lista
        // tomar el siguiente número no marcado de la lista y repetir paso 2 hasta el final

        $listaNumeros = [];

        for($index = 2; $index < $alcanceBusqueda; $index++) {
            $listaNumeros[$index] = true;
        }

        for($comprobarNumero = 2; $comprobarNumero < $alcanceBusqueda; $comprobarNumero++) {
            if($listaNumeros[$comprobarNumero] == true) {
                for($numeroParaComparar = $comprobarNumero * $comprobarNumero;
                    $numeroParaComparar < $alcanceBusqueda;
                    $numeroParaComparar += $comprobarNumero) {

                    $listaNumeros[$numeroParaComparar] = false;
                }
            }
        }
        
        echo "Los primos son: ";
        for($index = 2; $index < $alcanceBusqueda; $index++) {
            if($listaNumeros[$index] == true) {
                echo $index . " ";
            }
        }

    }

    mostrarCriba(100);
?>