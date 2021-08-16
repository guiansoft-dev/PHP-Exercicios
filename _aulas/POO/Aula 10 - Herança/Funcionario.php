<?php

    require_once 'Pessoa.php';

    class Funcionario extends Pessoa{
        private $setor;
        private $trabalhando;

        //Construtor
        public function Funcionario($newNome, $newIdade, $newSexo, $newSetor, $newTrabalhando){
            $this->setNome($newNome);
            $this->setIdade($newIdade);
            $this->setSexo($newSexo);
            $this->setSetor($newSetor);
            $this->setTrabalhando($newTrabalhando);
        }

        //Getters
        public function getSetor(){
            return $this->setor;
        }

        public function getTrabalhando(){
            return $this->trabalhando;
        }

        //Setters
        public function setSetor($valor){
            $this->setor = $valor;
        }

        public function setTrabalhando($valor){
            $this->trabalhando = $valor;
        }

        //Métodos publicos
        public function mudarTrabalho(){
            $this->setTrabalhando(!$this->getTrabalhando());
        }
    }