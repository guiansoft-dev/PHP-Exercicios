<?php

interface Controlador{
    //Métodos abstratos
    public function ligar();
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function aumentarVolume();
    public function abaixarVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();
}