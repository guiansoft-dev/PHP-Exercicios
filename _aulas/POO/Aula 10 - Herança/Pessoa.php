<?php

class Pessoa{
    private $nome;
    private $idade;
    private $sexo;

    //Constructor
    public function __construct($newNome, $newIdade, $newSexo){
        $this->setNome($newNome);
        $this->setIdade($newIdade);
        $this->setSexo($newSexo);
    }

    //Getters
    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getSexo(){
        return $this->sexo;
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

    //Métodos comuns
    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
}