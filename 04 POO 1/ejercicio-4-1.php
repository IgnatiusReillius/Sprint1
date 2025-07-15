<?php
    class Empleado {
        private $nombre, $sueldo;

        public function __construct(string $miNombre, int $miSueldo) {
            $this->nombre = $miNombre;
            $this->sueldo = $miSueldo;
        }
        public function print() {
            $mensaje = ", no tienes que pagar impuestos. Tienes " . $this->sueldo . "€" . PHP_EOL;
            if($this->sueldo > 6000) { 
                $mensaje = ", tienes que pagar impuestos. Tienes " . $this->sueldo . "€" . PHP_EOL;
            }
            echo $this->nombre . $mensaje;
        }
    }

    $empleado1 = new Empleado("Juan", 5000);
    $empleado1->print();
    $empleado2 = new Empleado("Carla", 12000);
    $empleado2->print();
?>