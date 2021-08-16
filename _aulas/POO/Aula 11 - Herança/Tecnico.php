<?php

    require_once 'Aluno.php';

    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Tecnico extends Aluno{
        private $registroProfissional;

        //Construtor
         public function Funcionario($newNome, $newIdade, $newSexo, $newMatricula, $newCurso, $newRegistroProfissional){
            $this->setNome($newNome);
            $this->setIdade($newIdade);
            $this->setSexo($newSexo);
            $this->setMatricula($newMatricula);
            $this->setCurso($newCurso);
            $this->setRegistroProfissional($newRegistroProfissional);
        }

        //Getters
        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }

        //Setters
        public function setRegistroProfissional($valor){
            $this->registroProfissional = $valor;
        }

        //Métodos públicos
        public function praticar(){
            echo "<h3>O aluno técnico '".$this->getNome()."' está praticando!</h3>";
        }
    }