<?php

    require_once 'Mamifero.php';

    //Herança de diferença
    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Canguru extends Mamifero{
        //Sobrescrevendo métodos
        public function locomover(){
            echo "<h3>Saltando...</h3>";
        }

        //Métodos publicos
        public function usarBolsa(){
            echo "<h3>Usando bolsa...</h3>";
        }
    }