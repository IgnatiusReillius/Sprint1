<?php
    abstract class Forma {
        protected $alto, $ancho;

        public function __construct(int $miAlto, int $miAncho) {
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
            echo "El área de este rectángulo, de $this->alto de alto y $this->ancho de ancho es de " . ($this->alto * $this->ancho) . PHP_EOL;
        }
    }

    $forma1 = new Triangulo(10, 10);
    $forma1->calcularArea();
    $forma2 = new Rectangulo(10, 10);
    $forma2->calcularArea();
?>