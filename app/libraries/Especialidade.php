<?php
namespace app\libraries;

class Especialidade{
    private int $numeroRegistro;
    private string $name;
    private string $publicoAlvo;


        public function __construct(Int $numeroRegistro, String $name, String $publicoAlvo){
            $this->numeroRegistro = $numeroRegistro;
            $this->name = $name;
            $this->publicoAlvo = $publicoAlvo;
        }
        
        public function setNumeroRegistro($numeroRegistro){
            $this->numeroRegistro = $numeroRegistro;
        }

        public function getNumeroRegistro(){
            return $this->numeroRegistro;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setPublicoAlvo($publicoAlvo){
            $this->publicoAlvo = $publicoAlvo;
        }

        public function getPublicoAlvo(){
            return $this->publicoAlvo;
        }
    } 
?>