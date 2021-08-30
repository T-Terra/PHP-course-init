<?php 
  require_once "livro.php";

  class Pessoa {
    //Atributos
    private $nome, $idade, $sexo;


    public function __construct($n, $i, $s) {
      $this->setNome($n);
      $this->setIdade($i);
      $this->setSexo($s);
    }


    //Métodos
    public function fazerAniver() {
      $this->setIdade($this->getIdade() + 1);
    }

    //getters
    private function getNome() {
      return $this->nome;
    }
    private function getIdade() {
      return $this->idade;
    }
    private function getSexo() {
      return $this->sexo;
    }

    //setters
    private function setNome($n) {
      $this->nome = $n;
    }
    private function setIdade($i) {
      $this->idade = $i;
    }
    private function setSexo($s) {
      $this->sexo = $s;
    }

  }