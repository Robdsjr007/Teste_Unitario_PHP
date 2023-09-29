<?php
namespace app\libraries;

class Consulta{
    private int $numeroConsulta;
    private string $data;
    private int $hora;
    private $agendamento;
    private $medico;
    private $paciente;

        public function __construct(Int $numeroConsulta, String $data, Int $hora, $agendamento, $medico, $paciente){
            $this->numeroConsulta = $numeroConsulta;
            $this->data= $data;
            $this->hora = $hora;
            $this->agendamento = $agendamento;
            $this->medico = $medico;
            $this->paciente = $paciente;

        }
        
        public function setNumeroConsulta($numeroConsulta){
            $this->numeroConsulta = $numeroConsulta;
        }

        public function getNumeroConsulta(){
            return $this->numeroConsulta;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }

        public function setHora($hora){
            $this->hora = $hora;
        }

        public function getHora(){
            return $this->hora;
        }
    } 
?>