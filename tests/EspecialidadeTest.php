<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Especialidade;

    class EspecialidadeTest extends TestCase{

        public function testEspecialidadeNumeroRegistro(){
            $p1 = new Especialidade(1, "Rogério", "Nerd");

            $this->assertEquals(1, $p1->getNumeroRegistro());
        }

        public function testEspecialidadeName(){
            $p2 = new Especialidade(1, "Rogério", "Nerd");

            $this->assertEquals("Rogério", $p2->getName());
        }

        public function testEspecialidadePublicoAlvo(){
            $p3 = new Especialidade(1, "Rogério", "Nerd");
            
            $this->assertEquals("Nerd", $p3->getPublicoAlvo());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetPublicoAlvo(){
            $p1 = new Especialidade(1, "Rogério", "Nerd");
            $p1->setPublicoAlvo('Nerd');
            $this->assertEquals("Nerd", $p1->getPublicoAlvo());
        }


        public function testSetName(){
            $p1 = new Especialidade(1, "Rogério", "Nerd");
            $p1->setName('Rogérinho');
            $this->assertEquals("Rogérinho", $p1->getName());
        }

        public function testSetNumeroRegistro(){
            $p1 = new Especialidade(1, "Rogério", "Nerd");
            $p1->setNumeroRegistro(1);
            $this->assertEquals(1, $p1->getNumeroRegistro());
        }
    }
?>

