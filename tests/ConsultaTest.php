<?php



    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Consulta;
    use app\libraries\Agendamento;
    use app\libraries\Medico;
    use app\libraries\Paciente;
    use app\libraries\Especialidade;

    class ConsultaTest extends TestCase{

        public function testConsultaNumeroConsulta(){
            $p1 = new Consulta(1, "09-12-2005", 21, new Agendamento(1, "09-12-2005", 21, "Mal"), new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53", new Especialidade(1, "Rogério", "Nerd")), new Paciente(1, "Rogério", 11991134786, "Rua carlos almeida, 53"));
            
            $this->assertEquals(1, $p1->getNumeroConsulta());
        }

        public function testConsultaData(){
            $p2 = new Consulta(1, "09-12-2005", 21, new Agendamento(1, "09-12-2005", 21, "Mal"), new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53", new Especialidade(1, "Rogério", "Nerd")), new Paciente(1, "Rogério", 11991134786, "Rua carlos almeida, 53"));

            $this->assertEquals("09-12-2005", $p2->getData());
        }

        public function testConsultaHora(){
            $p3 = new Consulta(1, "09-12-2005", 21, new Agendamento(1, "09-12-2005", 21, "Mal"), new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53", new Especialidade(1, "Rogério", "Nerd")), new Paciente(1, "Rogério", 11991134786, "Rua carlos almeida, 53"));
            
            $this->assertEquals(21, $p3->getHora());
        }

        public function testVerificarTrue(){
            $this->assertTrue(true);
        }

        public function testVerificarFalse(){
            $this->assertFalse(false);
        }

        public function testSetHora(){
            $p1 = new Consulta(1, "09-12-2005", 21, new Agendamento(1, "09-12-2005", 21, "Mal"), new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53", new Especialidade(1, "Rogério", "Nerd")), new Paciente(1, "Rogério", 11991134786, "Rua carlos almeida, 53"));
            $p1->setHora(21);
            $this->assertEquals(21, $p1->getHora());
        }


        public function testSetData(){
            $p1 = new Consulta(1, "09-12-2005", 21, new Agendamento(1, "09-12-2005", 21, "Mal"), new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53", new Especialidade(1, "Rogério", "Nerd")), new Paciente(1, "Rogério", 11991134786, "Rua carlos almeida, 53"));
            $p1->setData("09-12-2005");
            $this->assertEquals("09-12-2005", $p1->getData());
        }

        public function testSetNumeroConsulta(){
            $p1 = new Consulta(1, "09-12-2005", 21, new Agendamento(1, "09-12-2005", 21, "Mal"), new Medico(1, "Rogério", 11991134786, "Rua carlos almeida, 53", new Especialidade(1, "Rogério", "Nerd")), new Paciente(1, "Rogério", 11991134786, "Rua carlos almeida, 53"));
            $p1->setNumeroConsulta(1);
            $this->assertEquals(1, $p1->getNumeroConsulta());
        }
    }
?>

