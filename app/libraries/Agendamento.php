<?php
namespace app\libraries;

class Agendamento{
    private int $numeroAgendamento;
    private int $data;
    private int $hora;
    private string $gravidade;


        public function __construct(Int $numeroAgendamento, Int $data, Int $hora, String $gravidade){
            $this->numeroAgendamento = $numeroAgendamento;
            $this->data= $data;
            $this->hora = $hora;
            $this->gravidade = $gravidade;
        }
        
        public function setNumeroA($numeroAgendamento){
            $this->numeroAgendamento = $numeroAgendamento;
        }

        public function getNumeroA(){
            return $this->numeroAgendamento;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getdata(){
            return $this->data;
        }

        public function setHora($hora){
            $this->hora = $hora;
        }

        public function getHora(){
            return $this->hora;
        }

        public function setGravidade($gravidade){
            $this->gravidade = $gravidade;
        }

        public function getGravidade(){
            return $this->gravidade;
        }
    } 
?>