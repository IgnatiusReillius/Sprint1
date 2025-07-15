<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tema 4 Nivel 1 Ejercicio 1</title>
        <style> 
            body {
                font-family: monospace;
            }
        </style>
    </head>
    <body>
        <h1>
            <?php
                class Empleado {
                    private $nombre, $sueldo;

                    public function __construct($miNombre, $miSueldo) {
                        $this->nombre = $miNombre;
                        $this->sueldo = $miSueldo;
                    }
                    public function print() {
                        $mensaje = ", no tienes que pagar impuestos.<br>";
                        if($this->sueldo > 6000) { 
                            $mensaje = ", tienes que pagar impuestos.<br>";
                        }
                        echo $this->nombre . $mensaje;
                    }
                }

                $empleado1 = new Empleado("Juan", 5000);
                $empleado1->print();
                $empleado2 = new Empleado("Carla", 12000);
                $empleado2->print();
            ?>
        </h1>
    </body>
</html>