<?php
class Pessoa {
  //Atributos
  private $nome;
  private $idade;
  private $sexo;

  //Métodos
  public function fazerniver() {
    $this->setIdade($this->getIdade() + 1);
  }

  //getters
  public function getNome() {
    return $this->nome;
  }
  public function getIdade() {
    return $this->idade;
  }
  public function getSexo() {
    return $this->sexo;
  }

  //setters
  public function setNome($n) {
    $this->nome = $n;
  }
  public function setIdade($i) {
    $this->idade = $i;
  }
  public function setSexo($s) {
    $this->sexo = $s;
  }
}