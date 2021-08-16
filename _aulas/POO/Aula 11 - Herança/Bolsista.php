<?php

    require_once 'Aluno.php';

    //Classe final não permite que a classe seja usada como herança para outra classe
    final class Bolsista extends Aluno{
        private $bolsa;

        //Construtor
        public function Funcionario($newNome, $newIdade, $newSexo, $newMatricula, $newCurso, $newBolsa){
            $this->setNome($newNome);
            $this->setIdade($newIdade);
            $this->setSexo($newSexo);
            $this->setMatricula($newMatricula);
            $this->setCurso($newCurso);
            $this->setBolsa($newBolsa);
        }

        //Getters
        public function getBolsa(){
            return $this->bolsa;
        }

        //Setters
        public function setBolsa($valor){
            $this->bolsa = $valor;
        }

        //Sobrescrevendo método
        public function pagarMensalidade(){
            echo "<h3>Mensalidade do aluno '".$this->getNome()."' paga com desconto!</h3>";
        }

        //Métodos publicos
        public function renovarBolsa(){
            echo "<h3>Bolsa do aluno(a) '".$this->getNome()."' renovada!</h3>";
        }
    }