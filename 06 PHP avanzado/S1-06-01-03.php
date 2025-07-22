<?php
    class Workclass {
        private $tasks = 0;

        public function __construct(int $number) {
            $this->tasks = $number;
        }

        public function __toString() {
            return "Task " . $this->tasks . PHP_EOL;
        }
        
    }

    $task1 = new Workclass(1);
    echo $task1->__toString();
    $task2 = new Workclass(2);
    echo $task2->__toString();
?>