<?php
  require_once "interface.php";

  class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    //Métodos
    public function detalhes() {

    }

    //Métodos da Interface
    public function abrir() {

    }
    public function fechar() {

    }
    public function folhear() {

    }
    public function avancarPag() {

    }
    public function voltarPag() {

    }

    //getters
    private function getTitulo() {
      return $this->titulo;
    }
    private function getAutor() {
      return $this->autor;
    }
    private function getTotPag() {
      return $this->totPaginas;
    }
    private function getPagAtual() {
      return $this->pagAtual;
    }
    private function getAberto() {
      return $this->aberto;
    }
    private function getLeitor() {
      return $this->leitor;
    }

    //setters
   

  }