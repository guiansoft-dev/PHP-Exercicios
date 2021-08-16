<?php

    require_once './interfaces/AcoesVideos.php';

    class Video implements AcoesVideos{
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        //Construtor
        public function __construct($newTitulo){
            $this->setTitulo($newTitulo);
            $this->setAvaliacao(1);
            $this->setViews(0);
            $this->setCurtidas(0);
            $this->setReproduzindo(false);
        }

        //Getters
        public function getTitulo(){
            return $this->titulo;
        }

        public function getAvaliacao(){
            return $this->avaliacao;
        }

        public function getViews(){
            return $this->views;
        }

        public function getCurtidas(){
            return $this->curtidas;
        }

        public function getReproduzindo(){
            return $this->reproduzindo;
        }

        //Setters
        public function setTitulo($valor){
            $this->titulo = $valor;
        }

        public function setAvaliacao($valor){
            $this->avaliacao = $this->getViews() != 0 ? ($this->getAvaliacao() + $valor) / $this->getViews() : $valor;
        }

        public function setViews($valor){
            $this->views = $valor;
        }

        public function setCurtidas($valor){
            $this->curtidas = $valor;
        }

        public function setReproduzindo($valor){
            $this->reproduzindo = $valor;
        }

        //Métodos da interface
        public function play(){
            $this->setReproduzindo(true);
        }

        public function pause(){
            $this->setReproduzindo(false);
        }

        public function like(){
            $this->setCurtidas($this->getCurtidas() + 1);
        }
    }