<?php
namespace app\libraries;

class Medico{
    private int $CRM;
    private string $name;
    private $telefone;
    private string $endereco;
    private $especialidade;


        public function __construct( $CRM, String $name, $telefone, String $endereco, $especialidade){
            $this->crm = $CRM;
            $this->name = $name;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->especialidade = $especialidade;
        }
        
        public function setCrm($CRM){
            $this->crm = $CRM;
        }

        public function getCrm(){
            return $this->crm;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        public function getEndereco(){
            return $this->endereco;
        }
    } 
?>