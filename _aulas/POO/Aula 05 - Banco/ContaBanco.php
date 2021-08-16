<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Constructor
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }

    //Getters
    public function getNumConta(){
        return $this->numConta;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getDono(){
        return $this->dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    //Setters
    public function setNumConta($newValor){
        $this->numConta = $newValor;
    }

    public function setTipo($newValor){
        $this->tipo = $newValor;
    }

    public function setDono($newValor){
        $this->dono = $newValor;
    }

    public function setSaldo($newValor){
        $this->saldo = $newValor;
    }

    public function setStatus($newValor){
        $this->status = $newValor;
    }

    //Métodos Personalizados

    public function abrirConta($newTipo){
        $this->setTipo($newTipo);
        $this->setStatus(true);
        $this->setSaldo($this->getTipo() != "cc" ? $this->getTipo() == "cp" ? 150 : null : 50);
    }

    public function fecharConta(){
        if($this->getSaldo() != 0)
        {
            echo "<h2>" . ($this->getSaldo() > 0 ? "Ainda tem dinheiro ai na conta zé, dá pra fechar não" : "Tu tá devendo e quer fechar? Assim não né") . "</h2>";
        }
        else
        {
            $this->setTipo(null);
            $this->setStatus(false);
            echo "<h2>Conta fechada com sucesso!</h2>";
        }
    }

    public function depositar($valor){
        if($this->getStatus())
        {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<h2>Depósito caiu com sucesso na conta do Zé $this->dono</h2>";
        }
        else
        {
            echo "<h2>Quer depositar numa conta fechada? Eu mereço mesmo</h2>";
        }
    }

    public function sacar($valor){
        if($this->getStatus() && $valor <= $this->getSaldo())
        {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<h2>{$this->getDono()} sacou com sucesso</h2>";
        }
        else
        {
            echo "<h2>" . ($this->getStatus() ? "Quer pegar mais do que tem" : "Tu quer sacar de conta fechada, assim não dá") . "</h2>";
        }
    }

    public function pagarMensal(){
        $valor = $this->getTipo() != "cc" ? $this->getTipo() == "cp" ? 20 : null : 12;
        if($this->getStatus())
        {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<h2>Mensalidade tá paga</h2>";
        }
        else
        {
            echo "<h2>Deu pra pagar não</h2>";
        }
    }   
}