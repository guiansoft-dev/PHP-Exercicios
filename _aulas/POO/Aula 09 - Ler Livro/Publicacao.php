<?php

interface Publicacao{
    public function pegarLivro();
    public function folhear($valor);
    public function mudarPagina($valor);
}