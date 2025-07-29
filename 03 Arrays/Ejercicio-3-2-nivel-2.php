<?php
    const NOTAS = 5;
    $arrayAlumnos = ["Jose" => array(5, 6, 3, 9, 5.5),
                     "María" => array(7.5, 6, 8, 5, 2),
                     "Alba" => array(3, 4.5, 5, 4, 6), 
                     "Juan" => array(8, 9, 8.5, 8, 7),
                     "Ale" => array(6, 7.5, 7, 5.5, 6)
                    ];

    function listarAlumnos(array $array) {
        foreach($array as $alumno => $notas) {
            echo "Las notas de $alumno son:";
            foreach($notas as $nota) {
                echo " $nota";
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
    }

    function notaMediaAlumnos(array $array) : float {
        $notaMediaClase = 0;

        foreach($array as $alumno => $notas) {
            $notaMediaAlumno = 0;
            foreach($notas as $nota) {
                $notaMediaAlumno += $nota;
            }
            $notaMediaClase += $notaMediaAlumno;
            echo "La nota media de $alumno es de " . $notaMediaAlumno/NOTAS;
            echo PHP_EOL;
        }
        echo PHP_EOL;
        return $notaMediaClase;
    }

    function notaMediaClase(array $array) {

        $notaMediaClase = notaMediaAlumnos($array);

        echo "La nota media de la clase es de " . ($notaMediaClase/NOTAS)/count($array) . PHP_EOL;
    }

    listarAlumnos($arrayAlumnos);
    notaMediaClase($arrayAlumnos);
?>