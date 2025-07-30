<?php
    declare(strict_types=1);

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

        public function testIsEven() : void {
            $this->assertFalse($this->numberChecker->isEven());
        }

        public function testIsPositive() : void {
            $this->assertTrue($this->numberChecker->isPositive());
        }
    
    }
?>