<?php
  require_once "interface.php";

  class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($t, $a, $totpag, $pagat, $le) {
      $this->setTitulo($t);
      $this->setAutor($a);
      $this->setTotPag($totpag);
      $this->setPagAtual($pagat);
      $this->setAberto(false);
      $this->setLeitor($le);
    }

    //Métodos
    public function detalhes() {
      echo "<p>O Título do livro é: {$this->getTitulo()}</p>";
      echo "<p>Autor(a): {$this->getAutor()}</p>";
      echo "<p>Total de páginas: {$this->getTotPag()}</p>";
      echo "<p>Página atual: {$this->getPagAtual()}</p>";
      echo "<p>Leitor: {$this->getLeitor()}</p>";
    }

    //Métodos da Interface
    public function abrir() {
      $this->setAberto(true);
      if ($this->getAberto() === true) {
        echo "<p>Abriu o livro!</p>";
      }
    }
    public function fechar() {
      $this->setAberto(false);
      if ($this->getAberto() === false) {
        echo "<p>fechou o livro!</p>";
      }
    }
    public function folhear() {
      if ($this->getPagAtual() <= $this->getTotPag()) {
        $this->setPagAtual($this->getPagAtual() + 10);
      } else {
        echo "<p>Não é possível folhear mais, já chegou ao final do livro</p>";
      }
    }
    public function avancarPag() {
      $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag() {
      $this->setPagAtual($this->getPagAtual() - 1);
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
    private function setTitulo($t) {
      $this->titulo = $t;
    }
    private function setAutor($a) {
      $this->autor = $a;
    }
    private function setTotPag($tot) {
      $this->totPaginas = $tot;
    }
    private function setPagAtual($pag) {
      $this->pagAtual = $pag;
    }
    private function setAberto($ab) {
      $this->aberto = $ab;
    }
    private function setLeitor($lei) {
      $this->leitor = $lei;
    }
   

  }