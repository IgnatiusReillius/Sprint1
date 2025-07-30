<?php
/*Crea la clase *PokerDice. Las caras de un dado de póquer tienen las siguientes figuras: As, K, Q, J, 7 y 8.
Crea el método *roll que no hace otra cosa que echar el dado, es decir, genera un valor aleatorio para el objeto a que se le aplica el método.
Crea también el método *shapeName, que diga cuál es la figura que ha salido en la última tirada del dado en cuestión.
Realiza una aplicación que permita echar cinco dados de póquer a la vez.
Además, programa el método *getTotalrolls que tiene que mostrar el número total de tiradas entre todos los dados.*/
    class PokerDice {
        const SHAPE = ["♣", "♦", "♥", "♠"];
        const FACES = array(0=>array("A",12), 
                            1=>array("K",11), 
                            2=>array("Q",10), 
                            3=>array("J",9), 
                            4=>array("8",8), 
                            5=>array("7",7));

        public function rollNtimes(int $number) : array {
            for($i = 0; $i < $number; $i++) {
                $rollDice[] = self::roll($i);
            }
            return $rollDice;
        }

        private function roll(int $rollNumber) : array {
            $rollDice[] = self::faceValue(rand(0, count(self::FACES) - 1));
            $rollDice[] = self::shapeName(rand(0, count(self::SHAPE) - 1));
            return $rollDice;
        }
        public function faceValue(int $randomValue) : int {
            $faceValue = self::FACES[$randomValue][1];
            return intval($faceValue);
        }
        public function shapeName(int $randomValue) : string{
            $faceShape = self::SHAPE[$randomValue] . PHP_EOL;
            return $faceShape;
        }
        
        public function showRollDice(array $array) {
            for($i = 0; $i <= count($array) - 1; $i++) {
                echo "Tirada nº " . ($i + 1) . ": " . $array[$i][0] . $array[$i][1];
            }
        }
        public function getTotalRolls(array $array) {
            $totalValue = 0;
            foreach($array as $roll) {
                $totalValue += $roll[0];
            }
            echo "El valor total de las tiradas da $totalValue";
        }
    }

    $dice = new PokerDice();
    $arrayRolls = $dice->rollNtimes(5);
    $dice->showRollDice($arrayRolls);
    $dice->getTotalRolls($arrayRolls);
?>