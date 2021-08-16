<?php
    require_once 'Lutador.php';

    class Luta{
        //Atributos
        private $lutador;
        private $desafiado;
        private $desafiante;
	    private $rounds;
	    private $aprovada;

	    //Getters
	    public Function getDesafiado() {
		    return $this->desafiado;
	    }

	    public function getDesafiante() {
		    return $this->desafiante;
	    }

	    public function getRounds() {
		    return $this->rounds;
	    }

	    public function isAprovada() {
		    return $this->aprovada;
	    }

	    //Setters
	    public function setDesafiado($valor) {
		    $this->desafiado = $valor;
	    }

	    public function setDesafiante($valor) {
		    $this->desafiante = $valor;
	    }

	    public function setRounds($valor) {
		    $this->rounds = $valor;
	    }

	    public function setAprovada($valor) {
		    $this->aprovada = $valor;
	    }
	
	    //Métodos Públicos
	    public function marcarLuta($lutador1, $lutador2) {
		    if($lutador1->getCategoria() === $lutador2->getCategoria() && $lutador1 != $lutador2) {
			    $this->setAprovada(true);
			    $this->setDesafiado($lutador1);
			    $this->setDesafiante($lutador2);
		    }else {
			    $this->setAprovada(false);
			    $this->setDesafiado(null);
			    $this->setDesafiante(null);
		    }
	    }

	    public function lutar() {
		    if($this->isAprovada()) {
                echo "<h2>LUTA INICIADA</h2>";
			    echo "<h3>## DESAFIADO ##</h3>";
			    $this->getDesafiado()->apresentar();
			    echo "<h3>\n## DESAFIANTE ##</h3>";
			    $this->getDesafiante()->apresentar();

			    $vencedor = rand(0,2);

			    switch($vencedor) {
				    case 0:
					    echo"<h3>__ Empatou! __</h3>";
					    $this->getDesafiado()->empatarLuta();
				    	$this->getDesafiante()->empatarLuta();
					    break;
				    case 1:
					    echo "<h3>__ O desafiado ".$this->getDesafiado()->getNome()." venceu. __</h3>";
					    $this->getDesafiado()->ganharLuta();
					    $this->getDesafiante()->perderLuta();
					    break;
				    case 2:
					    echo "<h3>__ O desafiante ".$this->getDesafiante()->getNome()." venceu. __</h3>";
					    $this->getDesafiado()->perderLuta();
					    $this->getDesafiante()->ganharLuta();
					    break;
				    default:
					    echo "<h3>__ Algo deu errado! __</h3>";
					    break;
			    }
		    }else {
			    echo "<h3>A luta não pode acontecer</h3>";
		    }
	    }
    }