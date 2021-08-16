<?php

class Canetas{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar(){
        if($this->tampada)
        {
            echo "[ERRO] A caneta está tampada!</br>";
        }
        else
        {
            echo "Rabiscando...</br>";
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }
}