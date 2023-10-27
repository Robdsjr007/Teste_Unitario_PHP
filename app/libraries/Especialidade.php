<?php
namespace app\libraries;

class Especialidade{
    private int $numeroRegistro;
    private string $nome;
    private string $publicoAlvo;


        public function __construct(Int $numeroRegistro, String $nome, String $publicoAlvo){
            $this->numeroRegistro = $numeroRegistro;
            $this->nome = $nome;
            $this->publicoAlvo = $publicoAlvo;
        }
        
        public function setNumeroRegistro($numeroRegistro){
            $this->numeroRegistro = $numeroRegistro;
        }

        public function getNumeroRegistro(){
            return $this->numeroRegistro;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setPublicoAlvo($publicoAlvo){
            $this->publicoAlvo = $publicoAlvo;
        }

        public function getPublicoAlvo(){
            return $this->publicoAlvo;
        }
    } 
?>