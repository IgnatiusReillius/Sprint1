<?php
    require 'numberChecker.php';
    use PHPUnit\Framework\TestCase;
    class NumberCheckerTest extends TestCase {
        private $numberChecker;

        protected function setUp() : void
        {
            $this->numberChecker = new NumberChecker(3);
        }
        
        protected function tearDown() : void
        {
            $this->numberChecker = NULL;
        }

        public function testIsEven() {
            $result = $this->numberChecker->isEven();
            $this->assertEquals(0, $result);
        }

        public function testIsPositive() {
            $result = $this->numberChecker->isPositive();
            $this->assertEquals(1, $result);
        }
    
    }
?>