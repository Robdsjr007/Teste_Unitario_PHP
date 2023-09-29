<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Agendamento;

    class AgendamentoTest extends TestCase{

        public function testAgendamentoNumeroAgendamento(){
            $p1 = new Agendamento(1, "09-12-2005", 21, "Mal");

            $this->assertEquals(1, $p1->getNumeroAgendamento());
        }

        public function testAgendamentoData(){
            $p2 = new Agendamento(1, "09-12-2005", 21, "Mal");

            $this->assertEquals("09-12-2005", $p2->getData());
        }

        public function testAgendamentoHora(){
            $p3 = new Agendamento(1, "09-12-2005", 21, "Mal");
            
            $this->assertEquals(21, $p3->getHora());
        }

        public function testAgendamentoGravidade(){
            $p4 = new Agendamento(1, "09-12-2005", 21, "Mal");
            
            $this->assertEquals("Mal", $p4->getGravidade());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetGravidade(){
            $p1 = new Agendamento(1, "09-12-2005", 21, "Mal");
            $p1->setGravidade("Mal");
            $this->assertEquals("Mal", $p1->getGravidade());
        }

        public function testSetHora(){
            $p1 = new Agendamento(1, "09-12-2005", 21, "Mal");
            $p1->setHora(21);
            $this->assertEquals(21, $p1->getHora());
        }


        public function testSetData(){
            $p1 = new Agendamento(1, "09-12-2005", 21, "Mal");
            $p1->setData("09-12-2005");
            $this->assertEquals("09-12-2005", $p1->getData());
        }

        public function testSetNumeroAgendamento(){
            $p1 = new Agendamento(1, "09-12-2005", 21, "Mal");
            $p1->setNumeroAgendamento(1);
            $this->assertEquals(1, $p1->getNumeroAgendamento());
        }
    }
?>

