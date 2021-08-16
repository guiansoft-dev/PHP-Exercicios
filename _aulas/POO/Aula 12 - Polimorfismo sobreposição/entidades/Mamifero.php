<?php

    require_once 'Animal.php';

    //Herança de diferença
    class Mamifero extends Animal{
        private $corPelo;

        //Construtor
        public function Mamifero($newPeso, $newIdade, $newMembros, $newCorPelo){
            $this->setPeso($newPeso);
            $this->setIdade($newIdade);
            $this->setMembros($newMembros);
            $this->setCorPelo($newCorPelo);
        }

        //Getters
        public function getCorPelo(){
            return $this->corPelo;
        }

        //Setters
        public function setCorPelo($valor){
            $this->corPelo = $valor;
        }

        //Métodos sobrescrevidos
        public function locomover(){
            echo "<h3>Correndo...</h3>";
        }

        public function alimentar(){
            echo "<h3>Mamando...</h3>";
        }

        public function emitirSom(){
            echo "<h3>Som de mamífero...</h3>";
        }
    }