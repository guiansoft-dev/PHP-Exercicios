<?php

//Classe abstrata não pode virar objeto
abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;

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
    //Método final não pode ser sobrescrevido
    public final function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
}