<?php

    require_once 'Animal.php';

    //Herança de diferença
    class Peixe extends Animal{
        private $corEscama;

        //Construtor
        public function Peixe($newPeso, $newIdade, $newMembros, $newCorEscama){
            $this->setPeso($newPeso);
            $this->setIdade($newIdade);
            $this->setMembros($newMembros);
            $this->setCorEscama($newCorEscama);
        }

        //Getters
        public function getCorEscama(){
            return $this->corEscama;
        }

        //Setters
        public function setCorEscama($valor){
            $this->corEscama = $valor;
        }

       //Métodos sobrescrevidos
       public function locomover(){
        echo "<h3>Nadando...</h3>";
        }

        public function alimentar(){
            echo "<h3>Comendo substâncias...</h3>";
        }

        public function emitirSom(){
            echo "<h3>Peixe não faz som...</h3>";
        }

        //Métodos públicos
        public function soltarBolha(){
            echo "<h3>Soltou uma bolha...</h3>";
        }
    }