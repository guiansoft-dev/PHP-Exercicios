<?php

    require_once 'Cachorro.php';

    //Herança de diferença
    class Lobo extends Mamifero{
        //Sobrescrevendo métodos
        public function emitirSom(){
            echo "<h3>Auuuuuuuuuuuuuuuuuuuu!</h3>";
        }
    }