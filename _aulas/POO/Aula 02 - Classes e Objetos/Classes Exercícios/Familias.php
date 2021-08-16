<?php

class Familias{
    var $pais;
    var $filhos;
    var $netos;
    var $juntos;

    function status(){
        $aux = $this->juntos ? "Sim" : "Não";
        echo "<li>Estão juntos? $aux</li>";
    }

    function juntar(){
        $this->juntos = true;
    }

    function afastar(){
        $this->juntos = false;
    }
}