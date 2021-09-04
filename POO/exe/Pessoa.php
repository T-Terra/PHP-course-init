<?php
abstract class Pessoa {
  protected $nome;
  protected $idade;
  protected $sexo;
  protected $exp;

  public function __construct($nome, $idade, $sexo) {
    $this->setNome($nome);
    $this->setIdade($idade);
    $this->setSexo($sexo);
    $this->setExp(0);
  }

  abstract protected function ganharExp($n);

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
  public function getExp() {
    return $this->exp;
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
  public function setExp($e) {
    $this->exp = $e;
  }
}