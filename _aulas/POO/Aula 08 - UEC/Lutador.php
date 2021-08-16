<?php

class Lutador{
    private $nome;
    private $nacionalidade;
    private $categoria;
    private $idade;
    private $altura;
    private $peso;
    private $vitotias;
    private $derrotas;
    private $empates;

    //Constructor
    public function __construct($newNome, $newNacionalidade, $newIdade, $newAltura, $newPeso, $newVitorias, $newDerrotas, $newEmpates){
        $this->setNome($newNome);
        $this->setNacionalidade($newNacionalidade);
        $this->setIdade($newIdade);
        $this->setAltura($newAltura);
        $this->setPeso($newPeso);
        $this->setVitorias($newVitorias);
        $this->setDerrotas($newDerrotas);
        $this->setEmpates($newEmpates);
    }

    //Getters
    public function getNome(){
        return $this->nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }

    //Setters
    public function setNome($valor){
        $this->nome = $valor;
    }

    public function setNacionalidade($valor){
        $this->nacionalidade = $valor;
    }

    private function setCategoria($valor){
        $this->categoria = ($valor < 52.2 || $valor > 120.2) ? "Inválido" : ($valor > 70.3) ?  ($valor > 89.9) ? "Pesado" : "Médio" :  "Leve";
    }

    public function setIdade($valor){
        $this->idade = $valor;
    }

    public function setAltura($valor){
        $this->altura = $valor;
    }

    public function setPeso($valor){
        $this->peso = $valor;
        $this->setCategoria($valor);
    }

    public function setVitorias($valor){
        $this->vitorias = $valor;
    }

    public function setDerrotas($valor){
        $this->derrotas = $valor;
    }

    public function setEmpates($valor){
        $this->empates = $valor;
    }

    //Métodos comuns
    public function apresentar()
    {
        print "<p>--------------------------------------------------</p>";
        print "<ul>";
    	print "<li>Nome: {$this->getNome()}.</li>";
        print "<li>Nacionalidade: {$this->getNacionalidade()}.</li>";
        print "<li>{$this->getIdade()} anos.</li>";
        print "<li>{$this->getAltura()} M de altura.</li>";
        print "<li>Pesando: {$this->getPeso()}.</li>";
        print "<li>Ganhou: {$this->getVitorias()}.</li>";
        print "<li>Perdeu: {$this->getDerrotas()}.</li>";
        print "<li>Empatou: {$this->getEmpates()}.</li>";
        print "</ul>";
    }

    public function status()
    {
        echo"<p>--------------------------------------------------</p>";
        echo "<ul>";
    	echo "<li>".$this->getNome().".</li>";
        echo "<li>É um peso ".$this->getCategoria().".</li>";
        echo "<li>".$this->getVitorias()." vitórias.</li>";
        echo "<li>".$this->getDerrotas()." derrotas.</li>";
        echo "<li>".$this->getEmpates()." empates.</li>";
        echo "</ul>";
    }

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }
}