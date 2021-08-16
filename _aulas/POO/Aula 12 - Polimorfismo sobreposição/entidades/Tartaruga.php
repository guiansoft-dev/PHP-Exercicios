<?php

    require_once 'Reptil.php';

    //Herança de diferença
    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Tartaruga extends Reptil{
        //Sobrescrevendo métodos
        public function locomover(){
            echo "<h3>Andando beeeeeem devagar...</h3>";
        }
    }