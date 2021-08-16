<?php

    require_once 'Pessoa.php';

    //Herança de diferença
    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistindo;

        //Contrutor
        public function __construct($newNome, $newIdade, $newSexo, $newLogin){
            parent::__construct($newNome, $newIdade, $newSexo);
            $this->setLogin($newLogin);
            $this->setTotAssistindo(0);
        }

        //Getters
        public function getLogin(){
            return $this->login;
        }

        public function getTotAssistindo(){
            return $this->totAssistindo;
        }

        //Setters
        public function setLogin($valor){
            $this->login = $valor;
        }

        public function setTotAssistindo($valor){
            $this->totAssistindo = $valor;
        }

        //Métodos comuns
        public function verVideo(){
            $this->setTotAssistindo($this->getTotAssistindo() + 1);
        }
    }