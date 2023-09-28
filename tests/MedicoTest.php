<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Medico;

    class MedicoTest extends TestCase{

        public function testMedicoCrm(){
            $p1 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");

            $this->assertEquals(1, $p1->getCrm());
        }

        public function testMedicoName(){
            $p2 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");

            $this->assertEquals("Rogério", $p2->getName());
        }

        public function testMedicoTelefone(){
            $p3 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");
            
            $this->assertEquals(11991134786, $p3->getTelefone());
        }

        public function testMedicoEndereco(){
            $p4 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");
            
            $this->assertEquals("Rua carlos almeida, 53", $p4->getEndereco());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetEndereco(){
            $p1 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");
            $p1->setEndereco('Rua carlos almeida');
            $this->assertEquals("Rua carlos almeida", $p1->getEndereco());
        }

        public function testSetTelefone(){
            $p1 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");
            $p1->setTelefone('11991134786');
            $this->assertEquals("11991134786", $p1->getTelefone());
        }


        public function testSetName(){
            $p1 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");
            $p1->setName('Rogérinho');
            $this->assertEquals("Rogérinho", $p1->getName());
        }

        public function testSetCrm(){
            $p1 = new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53");
            $p1->setName(1);
            $this->assertEquals(1, $p1->getCrm());
        }
    }
?>

