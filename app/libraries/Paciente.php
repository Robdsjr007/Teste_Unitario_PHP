<?php
namespace app\libraries;

class Paciente{
    private int $numeroBeneficiario;
    private string $name;
    private  $telefone;
    private string $endereco;


        public function __construct( $numeroBeneficiario,String $name, $telefone, String $endereco){
            $this->numeroBeneficiario = $numeroBeneficiario;
            $this->name = $name;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }

        public function setNumeroB($numeroBeneficiario){
            $this->numeroBeneficiario = $numeroBeneficiario;
        }

        public function getNumeroB(){
            return $this->numeroBeneficiario;
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