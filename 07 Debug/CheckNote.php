<?php
    declare(strict_types=1);

    class CheckNote {
        private $nota;
        public function __construct($nota) {
            $this->nota = $nota;
        }
        function VerificarNota() : string {
            if ($this->nota > 100 || $this->nota < 0) {
                return "La nota introducida no es correcta.";
            } 
            else if ($this->nota >= 60 && $this->nota <= 100) {
                return "Va a Primera División.";
            } 
            else if ($this->nota >= 45 && $this->nota < 60) {
                return "Va a Segunda División.";
            } 
            else if ($this->nota >= 33 && $this->nota < 45) {
                return "Va a Tercera División.";
            } 
            else {
                return "Va a tener que recuperar.";
            }
        }
        
    }
?>