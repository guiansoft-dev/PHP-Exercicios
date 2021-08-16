<?php

    require_once 'Animal.php';

    //Herança de diferença
    class Ave extends Animal{
        private $corPena;

        //Construtor
        public function Ave($newPeso, $newIdade, $newMembros, $newCorPena){
            $this->setPeso($newPeso);
            $this->setIdade($newIdade);
            $this->setMembros($newMembros);
            $this->setCorPena($newCorPena);
        }

        //Getters
        public function getCorPena(){
            return $this->corPena;
        }

        //Setters
        public function setCorPena($valor){
            $this->corPena = $valor;
        }

       //Métodos sobrescrevidos
        public function locomover(){
            echo "<h3>Voando...</h3>";
        }

        public function alimentar(){
            echo "<h3>Comendo frutas...</h3>";
        }

        public function emitirSom(){
            echo "<h3>Som de ave...</h3>";
        }

        //Métodos públicos
        public function fazerNinho(){
            echo "<h3>Fazendo ninho...</h3>";
        }
    }