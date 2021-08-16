<?php

    require_once 'Mamifero.php';

    //Herança de diferença
    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Cachorro extends Mamifero{
        //Métodos publicos
        public function enterrarOsso(){
            echo "<h3>Enterrou o osso...</h3>";
        }

        public function abanarRabo(){
            echo "<h3>Abanou o rabo...</h3>";
        }
    }