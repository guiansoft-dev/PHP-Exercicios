<?php

    require_once 'Lobo.php';

    //Herança de diferença
    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Cachorro extends Lobo{
        //Sobrescrevendo métodos
        public function emitirSom(){
            echo "<h3>Au au au au!</h3>";
        }

        public function reagirFrase($frase){
            echo "<h3>".(strtolower($frase) == "olá" || strtolower($frase) == "toma comida" ? "Abanar e Latir" : "Rosnar")."</h3>";
        }

        public function reagirHora($hora, $minutos){
            echo "<h3>".($hora >= 12 ? $hora < 18 ? "Abanar e latir" : "Ignorar" : "Abanar" )."</h3>";
        }

        public function reagirDono($dono){
            echo "<h3>".($dono ? "Abanar" : "Rosnar e latir")."</h3>";
        }

        public function reagirIdade($idade, $peso){
            if($idade < 5){
                echo "<h3>".($peso < 10 ? "Abanar" : "Latir")."</h3>";
            }else{
                echo "<h3>".($peso < 120? "Rosnar" : "Ignorar" )."</h3>";
            }
        }
    }