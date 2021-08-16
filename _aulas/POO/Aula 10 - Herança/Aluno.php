<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa{
        private $matricula;
        private $curso;

        //Construtor
        public function Aluno($newNome, $newIdade, $newSexo, $newMatricula, $newCurso){
            $this->setNome($newNome);
            $this->setIdade($newIdade);
            $this->setSexo($newSexo);
            $this->setMatricula($newMatricula);
            $this->setCurso($newCurso);
        }

        //Getters
        public function getMatricula(){
            return $this->matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        //Setters
        public function setMatricula($valor){
            $this->matricula = $valor;
        }

        public function setCurso($valor){
            $this->curso = $valor;
        }

        //Métodos publicos
        public function cancelarMatricula(){
            echo "<h3>Matricula cancelada!</h3>";
        }
    }