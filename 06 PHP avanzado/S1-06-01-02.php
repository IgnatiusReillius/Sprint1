<?php
    namespace workClass;

    class MagicFunctions {

        public function showWhatMagicConstantDoes(){
            echo "The line where is executed this message is " . __LINE__ . PHP_EOL;
            echo "The full path and filename of this file is " . __FILE__ . PHP_EOL;
            echo "My class is " . __CLASS__ . PHP_EOL;
            echo "My classname and class are " . MagicFunctions::class . PHP_EOL;
            echo "My namespace is " . __NAMESPACE__ . PHP_EOL;
            echo "The path of this method is " . __METHOD__ . PHP_EOL;
            echo "The name of this function is " . __FUNCTION__ . PHP_EOL;
        }
    }
    
    $magicFuntion1 = new MagicFunctions();
    $magicFuntion1->showWhatMagicConstantDoes();
?>