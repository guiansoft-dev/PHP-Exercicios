<?php

require_once 'Controlador.php';

class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;

    //Constructor
    public function __construct(){
        $this->setVolume(50);
        $this->setLigado(true);
        $this->setTocando(true);
    }

    //Getters
    private function getVolume(){
        return $this->volume;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function getTocando(){
        return $this->tocando;
    }

    //Setters
    private function setVolume($valor){
        $this->volume = $valor;
    }

    private function setLigado($valor){
        $this->ligado = $valor;
    }

    private function setTocando($valor){
        $this->tocando = $valor;
    }

    //Sobrescrevendo métodos
    public function ligar(){
        $this->setLigado(true);
    }

    public function desligar(){
        $this->setLigado(false);
    }

    public function abrirMenu(){
        echo "----Menu----</br>";
        echo "Está ligado? ".($this->getLigado() ? "Sim" : "Não")."</br>";
        echo "Está tocando? ".($this->getTocando() ? "Sim" : "Não")."</br>";
        echo "Volume: {$this->getVolume()}";

        for($i = 0; $i <= $this->getVolume(); $i += 10){
            echo " |";
        }
    }

    public function fecharMenu(){
        echo "Fechando menu...</br>";
    }

    public function aumentarVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function abaixarVolume(){
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo(){
        if($this->getLigado() && $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }

    public function pause(){
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }
}