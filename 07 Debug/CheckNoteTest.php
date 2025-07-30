<?php
    declare(strict_types=1);

    require "CheckNote.php";
    use PHPUnit\Framework\TestCase;
    
    class CheckNoteTest extends TestCase {
        private $checkNote1, $checkNote2, $checkNote3, $checkNote4, $checkNote5;

        protected function setUp() : void {
            $this->checkNote1 = new CheckNote(60);
            $this->checkNote2 = new CheckNote(50);
            $this->checkNote3 = new CheckNote(40);
            $this->checkNote4 = new CheckNote(10);
            $this->checkNote5 = new CheckNote(120);
        }
        protected function tearDown() : void {
            $this->checkNote1 = NULL;
            $this->checkNote2 = NULL;
            $this->checkNote3 = NULL;
            $this->checkNote4 = NULL;
            $this->checkNote5 = NULL;
        }

        public function testVerificarNotaPrimera() : void {
            $this->assertEquals("Va a Primera División.", $this->checkNote1->verificarNota());
        }
        public function testVerificarNotaSegunda() : void {
            $this->assertEquals("Va a Segunda División.", $this->checkNote2->verificarNota());
        }
        public function testVerificarNotaTercera() : void {
            $this->assertEquals("Va a Tercera División.", $this->checkNote3->verificarNota());
        }
        public function testVerificarNotaRecuperar() : void {
            $this->assertEquals("Va a tener que recuperar.", $this->checkNote4->verificarNota());
        }
        public function testVerificarNotaIncorrecta() : void {
            $this->assertEquals("La nota introducida no es correcta.", $this->checkNote5->verificarNota());
        }
    }
?>