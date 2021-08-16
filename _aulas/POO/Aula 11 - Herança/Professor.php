<?php

    require_once 'Pessoa.php';

    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Professor extends Pessoa{
        private $especialidade;
        private $salario;

        //Construtor
        public function Professor($newNome, $newIdade, $newSexo, $newEspecialidade, $newSalario){
            $this->setNome($newNome);
            $this->setIdade($newIdade);
            $this->setSexo($newSexo);
            $this->setEspecialidade($newEspecialidade);
            $this->setSalario($newSalario);
        }

        //Getters
        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function getSalario(){
            return $this->salario;
        }

        //Setters
        public function setEspecialidade($valor){
            $this->especialidade = $valor;
        }

        public function setSalario($valor){
            $this->salario = $valor;
        }

        //Métodos publicos
        public function receberAumento($valor){
            $this->setSalario($this->getSalario() + $valor);
        }
    }