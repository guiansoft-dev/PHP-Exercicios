<?php

class Canetas{
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    //public function Canetas() <-- Pode ser usado desta forma também.
    public function __construct($newModelo, $newCor, $newPonta){
        $this->setModelo($newModelo);
        $this->setCor($newCor);
        $this->setPonta($newPonta);
        //$this->ponta = $newPonta <-- desta forma também funcionária.
        $this->tampar();
    }

    public function rabiscar(){
        if($this->tampada)
        {
            echo "[ERRO] A caneta está tampada!</br>";
        }
        else
        {
            echo "Rabiscando...</br>";
        }
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function destampar(){
        $this->tampada = false;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($newModelo){
        $this->modelo = $newModelo;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setCor($newCor){
        $this->cor = $newCor;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($newPonta){
        $this->ponta = $newPonta;
    }
}