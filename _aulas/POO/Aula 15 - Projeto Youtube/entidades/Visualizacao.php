<?php

    require_once 'Gafanhoto.php';
    require_once 'Video.php';

    class Visualizacao{
        private $espectador;
        private $filme;

        //construtor
        public function __construct($newEspectador, $newFilme){
            $this->setEspectador($newEspectador);
            $this->setFilme($newFilme);
            $this->espectador->verVideo();
            $this->filme->setViews($this->filme->getViews() + 1);
        }

        //Getters
        public function getEspectador(){
            return $this->espectador;
        }

        public function getFilme(){
            return $this->filme;
        }

        //Setters
        public function setEspectador($valor){
            $this->espectador = $valor;
        }

        public function setFilme($valor){
            $this->filme = $valor;
        }

        //Métodos comuns
        public function avaliar(){
            $this->filme->setAvaliacao(5);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorcentagem($porcentagem){
            if($porcentagem <= 20){
                $this->filme->setAvaliacao(3);
            }else if($porcentagem <= 50){
                $this->filme->setAvaliacao(5);
            }else if($porcentagem <= 90){
                $this->filme->setAvaliacao(8);
            }else{
                $this->filme->setAvaliacao(10);
            }
        }
    }