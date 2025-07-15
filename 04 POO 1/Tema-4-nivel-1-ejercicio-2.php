<?php
    abstract class Forma {
        protected $alto, $ancho;

        public function __construct($miAlto, $miAncho) {
            $this->alto = $miAlto;
            $this->ancho = $miAncho;
        }
        abstract function calcularArea();
    }
    class Triangulo extends Forma {
        function calcularArea()
        {
            echo "El área de este triángulo, de $this->alto de alto y $this->ancho de ancho es de " . ($this->alto * $this->ancho)/2 . PHP_EOL;
        }
    }
    class Rectangulo extends Forma {
        function calcularArea()
        {
            echo "El área de este rectángulo, de $this->alto de alto y $this->ancho de ancho es de " . ($this->alto * $this->ancho) . "\n";
        }
    }

    function imprimirArea(Forma $forma) { // Poliformismo
        $forma->calcularArea();
    }

    $forma1 = new Triangulo(10, 10);
    $forma1->calcularArea();
    imprimirArea($forma1);
    $forma2 = new Rectangulo(10, 10);
    $forma2->calcularArea();
    imprimirArea($forma2);
?>