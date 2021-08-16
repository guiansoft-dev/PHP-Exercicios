<?php

//Classe abstrata não pode virar objeto
abstract class Animal{
    protected $peso;
    protected $idade;
    protected $membros;

    //Constructor
    public function __construct($newPeso, $newIdade, $newMembros){
        $this->setPeso($newPeso);
        $this->setIdade($newIdade);
        $this->setMembros($newMembros);
    }

    //Getters
    public function getPeso(){
        return $this->peso;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getMembros(){
        return $this->membros;
    }

    //Setters
    public function setPeso($valor){
        $this->peso = $valor;
    }

    public function setIdade($valor){
        $this->idade = $valor;
    }

    public function setMembros($valor){
        $this->membros = $valor;
    }

    //Método abstrato deve ser sobrescrevido
    public abstract function emitirSom();
}