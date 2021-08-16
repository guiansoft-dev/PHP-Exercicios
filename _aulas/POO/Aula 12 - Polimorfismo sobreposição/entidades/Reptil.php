<?php

    require_once 'Animal.php';

    //Herança de diferença
    class Reptil extends Animal{
        private $corEscama;

        //Construtor
        public function Reptil($newPeso, $newIdade, $newMembros, $newCorEscama){
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
        echo "<h3>Rastejando...</h3>";
        }

        public function alimentar(){
            echo "<h3>Comendo vegetais...</h3>";
        }

        public function emitirSom(){
            echo "<h3>Som de Réptil...</h3>";
        }
    }