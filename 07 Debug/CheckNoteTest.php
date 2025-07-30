<?php
    declare(strict_types=1);

    require "CheckNote.php";
    use PHPUnit\Framework\TestCase;
    
    class CheckNoteTest extends TestCase {
        private $checkNote;

        protected function setUp() : void {
            $this->checkNote = new CheckNote();
        }
        protected function tearDown() : void {
            $this->checkNote = NULL;
        }

        public function testVerificarNotaPrimera() : void {
            $this->assertEquals("Va a Primera División.", $this->checkNote->verificarNota(60));
        }
        public function testVerificarNotaSegunda() : void {
            $this->assertEquals("Va a Segunda División.", $this->checkNote->verificarNota(45));
        }
        public function testVerificarNotaTercera() : void {
            $this->assertEquals("Va a Tercera División.", $this->checkNote->verificarNota(33));
        }
        public function testVerificarNotaRecuperar() : void {
            $this->assertEquals("Va a tener que recuperar.", $this->checkNote->verificarNota(32));
        }
    }
?>