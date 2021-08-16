<?php

//Classe abstrata não pode virar objeto
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    //Constructor
    public function __construct($newNome, $newIdade, $newSexo){
        $this->setNome($newNome);
        $this->setIdade($newIdade);
        $this->setSexo($newSexo);
        $this->setExperiencia(0);
    }

    //Getters
    public function getNome(){
        return $this->Nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getExperiencia(){
        return $this->experiencia;
    }

    //Setters
    public function setNome($valor){
        $this->nome = $valor;
    }

    public function setIdade($valor){
        $this->idade = $valor;
    }

    public function setSexo($valor){
        $this->sexo = $valor;
    }

    public function setExperiencia($valor){
        $this->experiencia = $valor;
    }

    //Métodos comum
    //Final impede que o método seja sobrescrevido
    final protected function ganharExperiencia(){

    }
}