<?php
    require "CheckNote.php";
    use PHPUnit\Framework\TestCase;
    class CheckNoteTest extends TestCase {
        private $checkNote;

        protected function setUp() : void {
            $this->checkNote = new CheckNote();
        }
        protected function tearDown(): void {
            $this->checkNote = NULL;
        }

        public function testVerificarNotaPrimera() {
            $result = $this->checkNote->verificarNota(60);
            $this->assertEquals("Va a Primera División.", $result);
        }
        public function testVerificarNotaSegunda() {
            $result = $this->checkNote->verificarNota(45);
            $this->assertEquals("Va a Segunda División.", $result);
        }
        public function testVerificarNotaTercera() {
            $result = $this->checkNote->verificarNota(33);
            $this->assertEquals("Va a Tercera División.", $result);
        }
        public function testVerificarNotaRecuperar() {
            $result = $this->checkNote->verificarNota(32);
            $this->assertEquals("Va a tener que recuperar.", $result);
        }
    }
?>