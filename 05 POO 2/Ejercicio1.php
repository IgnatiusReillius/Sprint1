<?php
    interface Animal {
        function MakeSound() : void;
    }

    class Perro implements Animal{
        function MakeSound(): void
        {
            echo "Guau, guau!\n";
        }
    }
    
    class Gato implements Animal{
        function MakeSound(): void
        {
            echo "Miaaaau\n";
        }
    }

    $gatoSalvaje = new Gato(false);
    $gatoSalvaje->MakeSound();
    $perro1 = new Perro("Rufus", "Juan", 3);
    $perro1->MakeSound();

?>