<?php
    class CheckNote {
        private $nota;
        function VerificarNota($nota) : string{
            if ($nota >= 60) {
                return "Va a Primera División.";
            } else if ($nota >= 45 && $nota < 60) {
                return "Va a Segunda División.";
            } else if ($nota >= 33 && $nota < 45) {
                return "Va a Tercera División.";
            } else {
                return "Va a tener que recuperar.";
            }
        }
        
    }
?>