<?php
namespace app\libraries;

class Paciente{
    private int $numeroBeneficiario;
    private string $nome;
    private  $telefone;
    private string $endereco;


        public function __construct( $numeroBeneficiario,String $nome, $telefone, String $endereco){
            $this->numeroBeneficiario = $numeroBeneficiario;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
        }

        public function setNumeroB($numeroBeneficiario){
            $this->numeroBeneficiario = $numeroBeneficiario;
        }

        public function getNumeroB(){
            return $this->numeroBeneficiario;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
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