<?php
namespace app\libraries;

class Medico{
    private int $CRM;
    private string $nome;
    private $telefone;
    private string $endereco;
    private $especialidade;


        public function __construct( $CRM, String $nome, $telefone, String $endereco, $especialidade){
            $this->CRM = $CRM;
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->endereco = $endereco;
            $this->especialidade = $especialidade;
        }
        
        public function setCrm($CRM){
            $this->CRM = $CRM;
        }

        public function getCrm(){
            return $this->CRM;
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