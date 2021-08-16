<?php

class Computadores{
    var $modelo;
    var $marca;
    var $programas;
    var $tempoDeUso;
    var $ligado;
    var $usandoProgramas;

    function status(){
        $aux = $this->tempoDeUso <= 6 ? "novo" : "velho";
        echo "<li>Tempo de uso: $aux.</li>";

        $aux = $this->ligado ? "Sim" : "Não";
        echo "<li>Ligado? $aux.</li>";

        $aux = $this->usandoProgramas ? "Usando" : "Não usando";
        echo "<li>Usando algum programa? $aux.</li>";
    }

    function ligar(){
        $this->ligado = true;
    }

    function desligar(){
        $this->ligado = false;
    }

    function usarProgramas(){
        $this->usandoProgramas = true;
    }

    function encerrarProgramas(){
        $this->usandoProgramas = false;
    }
}