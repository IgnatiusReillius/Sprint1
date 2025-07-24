<?php
    class CheckNote {
        function VerificarNota($nota) : string{
            if ($nota >= 60) {
                return $message = "Va a Primera División.";
            } else if ($nota >= 45 && $nota < 60) {
                return $message = "Va a Segunda División.";
            } else if ($nota >= 33 && $nota < 45) {
                return $message = "Va a Tercera División.";
            } else {
                return $message = "Va a tener que recuperar.";
            }
        }
        
    }
?>