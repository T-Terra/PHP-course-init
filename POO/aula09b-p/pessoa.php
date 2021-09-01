<?php 
  require_once "livro.php";

  class Pessoa {
    //Atributos
    private $nome, $idade, $sexo;


    public function __construct($nome, $idade, $sexo) {
      $this->setNome($nome);
      $this->setIdade($idade);
      $this->setSexo($sexo);
    }


    //Métodos
    public function fazerAniver() {
      $this->setIdade($this->getIdade() + 1);
    }

    //getters
    public function getNome() {
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