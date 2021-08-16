<?php
	require_once 'Pessoa.php';
	require_once 'Publicacao.php';

    class Livro implements Publicacao{
		private $titulo;
		private $autor;
		private $totPaginas;
		private $pagAtual;
		private $aberto;
		private $leitor;

		//Contrutor
		public function Livro($newTitulo, $newAutor, $newTotPaginas, $newLeitor) {
			$this->setTitulo($newTitulo);
			$this->setAutor($newAutor);
			$this->setTotPaginas($newTotPaginas);
			$this->setPagAtual(0);
			$this->setAberto(false);
			$this->setLeitor($newLeitor);
		}

		//Getters
		public function getTitulo() {
			return $this->titulo;
		}

		public function getAutor() {
			return $this->autor;
		}

		public function getTotPaginas() {
			return $this->totPaginas;
		}

		public function getPagAtual() {
			return $this->pagAtual;
		}

		public function getAberto() {
			return $this->aberto;
		}

		public function getLeitor() {
			return $this->leitor;
		}

		//Setters
		public function setTitulo($valor) {
			$this->titulo = $valor;
		}

		public function setAutor($valor) {
			$this->autor = $valor;
		}

		public function setTotPaginas($valor) {
			$this->totPaginas = $valor;
		}

		public function setPagAtual($valor) {
			$this->pagAtual = $valor < 0 ? 0 : $valor;
		}

		public function setAberto($valor) {
			$this->aberto = $valor;
		}

		public function setLeitor($valor) {
			$this->leitor = $valor;
		}

		public function detalhes() {
			echo "<h3>----Painel de detalhes----</h3>";
			echo "<ul>";
			echo "<li>Titulo: ".$this->getTitulo().".</li>";
			echo "<li>Autor: ".$this->getAutor().".</li>";
			echo "<li>Total de Páginas: ".$this->getTotPaginas().".</li>";
			echo "<li>Página atual: ".$this->getPagAtual().".</li>";
			echo "</ul>";
		}

		//Métodos de Interface
		public function pegarLivro() {
			if($this->getAberto()) {
				$this->setAberto(false);
				echo "<h3>O livro foi fechado!</h3>";
			}
			else {
				$this->setAberto(true);
				echo "<h3>O livro foi aberto!</h3>";
			}
		}

		public function folhear($valor) {
			$this->setPagAtual($valor > $this->getTotPaginas() ? $this->getTotPaginas() : $valor);
			echo "<h3>Página atual: ".$this->getPagAtual().".</h3>";
		}

		public function mudarPagina($valor)
		{
			if($this->getAberto())
			{
				if($this->getPagAtual() < $this->getTotPaginas() || $valor < 0)
				{
					for($i = 0; $i < $valor; $i++)
					{
						$this->setPagAtual($this->getPagAtual() < $this->getTotPaginas() ? $this->getPagAtual() + 1 : $this->getPagAtual() + 0);
					}
					echo "<h3>Página atual: ".$this->getPagAtual().".</h3>";
				}
				else
				{
					echo "<h3>[ERRO] Você já chegou no final do livro!</h3>";
				}
			}
			else
			{
				echo "<h3>[ERRO] O livro está fechado, abra ele antes de mudar a página!</h3>";
			}
		}
	}