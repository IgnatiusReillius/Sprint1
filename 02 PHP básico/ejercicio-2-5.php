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
    
    VerificarNota(30);
?>